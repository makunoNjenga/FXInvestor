<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class PageController extends Controller
{

	/**
	 * Write the system log files
	 * @param array $data
	 * @param string $channel
	 * @param string $dir
	 * @throws \Exception
	 */
	public static function log(array $data, string $channel, string $dir) {
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
	public static function sendNotification(int $receiver, string $subject, string $message, int $sender = 0) {

		if ($subject != "Wallet to Wallet transfer verification code") {
			Notif::query()->create([
				'user_id' => $receiver,
				'sender_id' => $sender,
				'subject' => $subject,
				'message' => $message,
			]);
		}

		//send email
		$email = User::query()->find($receiver);

		if ($email) {
			self::queueEmail($email->email, $subject, "Hello " . $email->name . ",<br><br>$message");
		}
	}

	/**
	 * @param string $date
	 * @return false|string
	 */
	public static function preciseTime(string $date) {
		$date = Carbon::parse($date);
		$now = Carbon::now();
		$days = $date->diffInDays($now);

		if ($days > 2) {
			return date("d M Y - H:i:s ", strtotime($date));
		}
		return Carbon::parse($date)->diffForHumans();
	}


}
