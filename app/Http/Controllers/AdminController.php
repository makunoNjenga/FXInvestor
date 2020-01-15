<?php

namespace App\Http\Controllers;

use App\BettingOdd;
use App\TradingSignal;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
	public function __construct() {
		$this->middleware('auth:admin');
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function home(){
		$user = auth()->user();
		return view('admin.home',[
			'user'=>$user
		]);
	}
	/**
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function logout(){
		auth()->logout();
		Session::flush();
		return redirect()->route('admin.login');
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function sportBetting(){
		$odds = (new CacheController())->bettingOdds();
		return view('admin.investments.sport_betting',[
			'odds'=>$odds
		]);
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postSportBetting(Request $request){
		$odds = BettingOdd::query()->create([
			'match'=>$request->match,
			'pick'=>$request->pick,
			'odd'=>$request->odd,
			'kick_off'=>$request->kick_off,
			'price'=>$request->price,
		]);

		//send bulk notification
		(new PageController())->bulkNotificationsToAllUsers('Betting Tip', "New betting tip on $request->match has been released.",0);

		//cache the odds again
		(new CacheController())->put('betting-odds-new');

		alert()->success('success','Odd posted successfully');
		return redirect()->back();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getTradingSignal(){
		$tradingSignals = (new CacheController())->tradingSignals();
		return view('admin.investments.trading_signals',[
			'tradingSignals'=>$tradingSignals
		]);
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postTradingSignal(Request $request){
		TradingSignal::query()->create([
			'pair'=>$request->pair,
			'signal'=>$request->signal,
			'entry'=>$request->entry,
			'take_profit'=>$request->take_profit,
			'stop_loss'=>$request->stop_loss,
			'price'=>$request->price,
		]);

		//send bulk notification
		(new PageController())->bulkNotificationsToAllUsers('Trading Signal', "Trading signal on $request->pair has been released.",0);

		//cache the odds again
		(new CacheController())->put('trading-signals-new');

		alert()->success('success','Trading signal posted successfully');
		return redirect()->back();
	}
}
