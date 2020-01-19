<?php

namespace App\Http\Controllers;

use App\AdminStatement;
use App\BettingOdd;
use App\BoughtBettingOdd;
use App\BoughtTradingSignal;
use App\Invest;
use App\Notif;
use App\Statement;
use App\TradingSignal;
use App\User;
use Carbon\Carbon;
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
	    $odds = (new CacheController())->boughtOdds();
	    $signals = (new CacheController())->boughtSignals();
        return view('home',[
        	'user'=>$user,
	        'odds'=>$odds,
	        'signals'=>$signals,
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
	public static function sendNotification(int $receiver, string $subject, string $message, int $sender=0) {
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
		    (new CacheController())->refreshBoughtOdds();
    		return view('user.investments.purchase',[
    			'type'=>$type,
    			'transaction'=>$transaction,
    			'user'=>$user,
    			'balance'=>$balance,
		    ]);
	    }
    	if ($type=='signal'){
    		$transaction = TradingSignal::query()->find($id);
		    (new CacheController())->refreshBoughtSignals();
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

	    //fund admin
	    (new AdminController())->createStatement(env('ADMIN_STATEMENT_ODDS'),$odd->price,$description);

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

	    //contact admin
	    (new AdminController())->createStatement(env('ADMIN_STATEMENT_ODDS'),$signal->price,$description);

	    //refresh the cache
	    (new CacheController())->refreshTradingSignals();
	    alert()->success('Bought Signal',$description);
	    return redirect()->route('trading.signals')->with('success',$description);
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function invest(){
    	return view('user.investments.invest',[
		    'user'=>auth()->user()->load('investments')
	    ]);
    }

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function postInvest(Request $request){
	    $user = auth()->user();
    	if ($request->amount < 1000){
    		alert()->error('Error','Kindly choose the amount to invest.');
    		return redirect()->back()->with('error',"Kindly choose the amount to invest.");
	    }
	    //check balance
	    $balance = $this->getBalance($user->id);

    	if ($balance < $request->amount){
		    alert()->error('error',"Your balance is insufficient. Kindly top up here.");
		    return redirect()->back()->with('error',"Your balance is insufficient. Kindly  <a href='".route('top.up')."'>top up here</a>.");
	    }

	    //create entries
	    $maturity = Carbon::now()->addWeekdays($this->getDays($request->amount));
	    $description = "You have invested KES ".number_format($request->amount).". You expect 50% ROI of KES ".number_format($request->amount*0.5). " and a total of KES ".number_format($request->amount*0.5)." before ".date("M d Y",strtotime($maturity->addDays(1)));
    	Invest::query()->create([
    		'user_id'=>$user->id,
		    'amount' => $request->amount,
		    'interest'=>0.5 *$request->amount,
		    'matures_at'=>$maturity,
	    ]);

    	//create statements
	    $this->createStatements($user->id,env('STATEMENT_MAKE_INVESTMENT'),$request->amount,$description);

	    alert()->success('You Invested',$description);
	    return redirect()->back()->with('success',$description);
    }

	/**
	 * @param int $amount
	 * @return int
	 */
    public function getDays(int $amount){
	    if ($amount >= 1000 && $amount <= 5000){
		    return 3;
	    }
	    if ($amount >= 10000 && $amount <= 40000){
		    return 7;
	    }
	    if ($amount > 40000){
		    return 21;
	    }
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function getInvestmentStatement(){
	    $user = auth()->user();
    	$investments = Invest::query()->where('user_id',$user->id)->orderByDesc('matures_at')->take(20)->get();
    	return view('user.investments.manage_investments',[
    		'investments'=>$investments
	    ]);
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function withdraw(){
    	return view('user.finance.withdraw',[
    		'user'=>auth()->user()
	    ]);
    }

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function postWithdraw(Request $request){
    	$user = auth()->user();
    	$balance = $this->getBalance($user->id);
    	$amount = $request->amount;
	    $description = "Fund withdrawal of KES ".number_format($amount);
	    $transactionCharges = $amount*0.075 +15;

    	if ($amount > $balance){
		    alert()->error('error',"Your balance is insufficient. Kindly top up here.");
		    return redirect()->back()->with('error',"Your balance is insufficient. Kindly  <a href='".route('top.up')."'>top up here</a>.");
	    }

	    //create statement
	    $this->createStatements($user->id,env('STATEMENT_WITHDRAWAL'),$amount,$description);
	    $this->createStatements($user->id,env('STATEMENT_WITHDRAWAL_CHARGES'),$transactionCharges,"Withdrawal transaction charges");

	    //send notification
	    (new HomeController())->sendNotification($user->id,'Withdrawal',$description);

	    //admin transaction charges
	    (new AdminController())->createStatement(env('ADMIN_STATEMENT_USER_WITHDRAWAL_CHARGES'),$transactionCharges,"User withdrawal transaction charges.");

	    alert()->success('success',"Your withdrawal of KES ".number_format($amount)." has been received. Our technical team will review your transaction and complete it in time.");
	    return redirect()->back()->with('success',"Your withdrawal of KES ".number_format($amount)." has been received. Our technical team will review your transaction and complete it in time.");
    }
}
