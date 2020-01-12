<?php

namespace App\Http\Controllers;

use App\Notif;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    	return view('user.investments.sport_betting');
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function tradingSignals(){
	    return view('user.investments.trading_signals');
    }
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function topUp(){
	    return view('user.finance.top_up');
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function statements(){
    	return view('user.finance.statements');
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
}
