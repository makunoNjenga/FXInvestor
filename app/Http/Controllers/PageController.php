<?php

namespace App\Http\Controllers;

use App\BulkNotification;
use App\Invest;
use App\Notif;
use App\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class PageController extends Controller
{
    public function __construct()
    {
        $this->cacheTime = 60;
    }

    /**
     * Write the system log files
     * @param array $data
     * @param string $channel
     * @param string $dir
     * @throws Exception
     */
    public static function log(array $data, string $channel, string $dir)
    {
        $file = storage_path('logs/' . $dir . '.log');

        // finally, create a formatter
        $formatter = new JsonFormatter();

        // Create a handler
        $stream = new StreamHandler($file, Logger::INFO);
        $stream->setFormatter($formatter);

        // bind it to a logger object
        $securityLogger = new Logger($channel);
        $securityLogger->pushHandler($stream);
        $securityLogger->addInfo('info', $data);

    }


    /**
     * sends a notif to all the users in the system.
     * the system sender id = 0
     * @param int $receiver
     * @param string $subject
     * @param string $message
     * @param int $sender
     */
    public static function sendNotification(int $receiver, string $subject, string $message, int $sender = 0)
    {
        Notif::query()->create([
            'user_id' => $receiver,
            'sender_id' => $sender,
            'subject' => $subject,
            'message' => $message,
        ]);
    }

    /**
     * @param string $date
     * @return false|string
     */
    public static function preciseTime(string $date)
    {
        $date = Carbon::parse($date);
        $now = Carbon::now();
        $days = $date->diffInDays($now);

        if ($days > 2) {
            return date("d M Y - H:i:s ", strtotime($date));
        }
        return Carbon::parse($date)->diffForHumans();
    }

    /**
     * @param string $subject
     * @param string $message
     * @param int $receiver
     */
    public function bulkNotificationsToAllUsers(string $subject, string $message, int $receiver)
    {
        BulkNotification::query()->create([
            'subject' => $subject,
            'message' => $message,
            'receiver' => $receiver,
        ]);
    }

    public static function processBulkNotifications()
    {
        $notification = BulkNotification::query()->where('sent', false)->first();
        if ($notification && $notification->receiver == 0) {
            foreach (User::all('id') as $user) {
                self::sendNotification($user->id, $notification->subject, $notification->message);
            }
            $notification->sent = true;
            $notification->update();
        }
    }

    /**
     * @return int|mixed
     */
    public static function deleteOlderNotifications()
    {
        return DB::table('notifs')->where('created_at', '<', NOW()->subDays(2))->delete();
    }

    /**
     *
     */
    public function maturedInvestments()
    {
        $investments = Invest::query()->where('matured', false)->where('matures_at', '<=', Carbon::now())->get();

        foreach ($investments as $investment) {
            $investment->matured = true;
            $investment->update();

            //create two statements
            $investmentMessage = "Investment #$investment->id has matured and deposited to your balance.";
            $interestMessage = "#$investment->id investment interest.";

            (new HomeController())->createStatements($investment->user_id, env('STATEMENT_INVESTMENT_RETURNS'), $investment->amount, $investmentMessage);
            (new HomeController())->createStatements($investment->user_id, env('STATEMENT_INVESTMENT_INTEREST'), $investment->interest, $interestMessage);

            //send notification
            HomeController::sendNotification($investment->user_id, "Investment Matured", $interestMessage);
            HomeController::sendNotification($investment->user_id, "Interest Matured", $interestMessage);
        }
    }

}
