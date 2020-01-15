<?php

namespace App\Http\Controllers;

use App\BettingOdd;
use App\BoughtBettingOdd;
use App\BoughtTradingSignal;
use App\Notif;
use App\Statement;
use App\TradingSignal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Scalar\String_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$user = auth()->user();
        return view('home',[
        	'user'=>$user
        ]);
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function sportBetting(){
	    $odds = (new CacheController())->bettingOdds();
    	return view('user.investments.sport_betting',[
    		'odds'=>$odds,
    		'user'=>auth()->user(),
	    ]);
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function tradingSignals(){
	    $tradingSignals = (new CacheController())->tradingSignals();
	    return view('user.investments.trading_signals',[
	    	'tradingSignals'=>$tradingSignals,
		    'user'=>auth()->user()
	    ]);
    }
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function topUp(){
	    return view('user.finance.top_up',[
	    	'user'=>auth()->user()
	    ]);
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function statements(){
    	$user = auth()->user();
    	$statements = Statement::query()->where('user_id',$user->id)->orderByDesc('created_at')->take(50)->get();
    	return view('user.finance.statements',[
    		'user'=>$user,
    		'statements'=>$statements,
	    ]);
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function history(){
	    return view('user.investments.history');
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function profile(){
	    return view('user.info.profile',[
	    	'user'=>auth()->user()
	    ]);
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function contactAdmin(){
	    return view('user.info.contact_support',[
	    	'user'=>auth()->user()
	    ]);
    }

	/**
	 * @param Request $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function postContactAdmin(Request $request){
    	if ($request->subject=="--- Select a Subject ---"){
		    return redirect()->back()->with('error',"Select a correct subject");
	    }
    	if (strlen($request->message) == 0){
		    return redirect()->back()->with('error',"Write some message in the message box");
	    }
    	self::sendNotification(0,$request->subject,$request->message,$request->user_id);
	    return redirect()->back()->with('success',"You message was sent successfully");
    }

	/**
	 * @param int $sender
	 * @param string $subject
	 * @param string $message
	 * @param int $receiver
	 */
	public static function sendNotification(int $receiver, string $subject, string $message, int $sender) {
		Notif::query()->create([
			'user_id' => $receiver,
			'sender_id' => $sender,
			'subject' => $subject,
			'message' => $message,
		]);
	}
	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function postProfile(Request $request){
    	$user = User::query()->where('pin',$request->pin)->first();
    	$user->name = $request->name;
    	$user->phone_number = $request->phone_number;
    	$user->update();

    	return redirect()->back()->with('success',"Your profile has been updated!");
    }
	/**
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function logout(){
    	auth()->logout();
    	Session::flush();
    	return redirect()->route('login');
    }

	/**
	 * @param Request $request
	 */
    public function readNotifications(Request $request){
    	Notif::query()->where('read',false)->where('user_id',$request->userID)->update([
    		'read'=>true,
	    ]);
    }

	/**
	 * @param String $type
	 * @param int $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function purchase(String $type, int $id){
    	$user = auth()->user();
    	$balance = $this->getBalance($user->id);
    	if ($type=='odd'){
    		$transaction = BettingOdd::query()->find($id);
    		return view('user.investments.purchase',[
    			'type'=>$type,
    			'transaction'=>$transaction,
    			'user'=>$user,
    			'balance'=>$balance,
		    ]);
	    }
    	if ($type=='signal'){
    		$transaction = TradingSignal::query()->find($id);
    		return view('user.investments.purchase',[
    			'type'=>$type,
    			'transaction'=>$transaction,
    			'user'=>$user,
    			'balance'=>$balance,
		    ]);
	    }
    }

	/**
	 * @param int $id
	 * @return int
	 */
    public function getBalance(int $id){
    	return Statement::query()->where('user_id',$id)->where('action',">" ,0)->sum('amount') - Statement::query()->where('user_id',$id)->where('action',"<" ,0)->sum('amount');
    }

	/**
	 * @param int $user_id
	 * @param int $action
	 * @param int $amount
	 * @param string $description
	 */
    public function createStatements(int $user_id, int $action, int $amount, string $description){
    	Statement::query()->create([
    		'user_id'=>$user_id,
    		'action'=>$action,
    		'amount'=>$amount,
    		'description'=>$description,
	    ]);
    }

	/**
	 * @param $user_id
	 * @param $odd_id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function purchaseBettingOdds(int $user_id, int $odd_id){
	    $odd= BettingOdd::query()->find($odd_id);
	    $description = "Purchased Betting Odds #$odd->id for KES $odd->price";

    	//create statement
	    $this->createStatements($user_id,env('STATEMENT_BETTING_ODDS'),$odd->price,$description);

	    //record sold odd
	    BoughtBettingOdd::query()->create([
	    	'betting_odd_id'=>$odd_id,
	    	'user_id'=>$user_id,
	    ]);

	    //send notification
	    PageController::sendNotification($user_id,"Bought Betting Odds",$description);

	    //refresh the cache
	    (new CacheController())->refreshBettingOdd();
	    alert()->success('Bought Odds',$description);
	    return redirect()->route('sport.betting')->with('success',$description);
    }

	/**
	 * @param int $user_id
	 * @param int $signal_id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function purchaseTradingSignals(int $user_id, int $signal_id){
	    $signal= TradingSignal::query()->find($signal_id);
	    $description = "Purchased Trading  Signals #$signal->id for KES $signal->price";

    	//create statement
	    $this->createStatements($user_id,env('STATEMENT_TRADING_SIGNAL'),$signal->price,$description);

	    //record sold odd
	    BoughtTradingSignal::query()->create([
	    	'trading_signal_id'=>$signal_id,
	    	'user_id'=>$user_id,
	    ]);

	    //send notification
	    PageController::sendNotification($user_id,"Bought Trading Signals",$description);

	    //refresh the cache
	    (new CacheController())->refreshTradingSignals();
	    alert()->success('Bought Signal',$description);
	    return redirect()->route('trading.signals')->with('success',$description);
    }
}
