<?php

namespace App\Http\Controllers;

use App\AdminStatement;
use App\BettingOdd;
use App\BoughtBettingOdd;
use App\TradingSignal;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller {
	public function __construct() {
		$this->middleware('auth:admin');
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function home() {
		$user = auth()->user();
		$odds = (new CacheController())->boughtOdds();
		$signals = (new CacheController())->boughtSignals();
		return view('admin.home', [
			'user' => $user,
			'odds'=>$odds,
			'signals'=>$signals,
		]);
	}

	/**
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function logout() {
		auth()->logout();
		Session::flush();
		return redirect()->route('admin.login');
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function sportBetting() {
		$odds = (new CacheController())->bettingOdds();
		return view('admin.investments.sport_betting', [
			'odds' => $odds,
		]);
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postSportBetting(Request $request) {
		$odds = BettingOdd::query()->create([
			'match' => $request->match,
			'pick' => $request->pick,
			'odd' => $request->odd,
			'kick_off' => $request->kick_off,
			'price' => $request->price,
		]);

		//send bulk notification
		(new PageController())->bulkNotificationsToAllUsers('Betting Tip', "New betting tip on $request->match has been released.", 0);

		//cache the odds again
		(new CacheController())->refreshBettingOdd();
		(new CacheController())->refreshOdds();

		alert()->success('success', 'Odd posted successfully');
		return redirect()->back();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getTradingSignal() {
		$tradingSignals = (new CacheController())->tradingSignals();
		return view('admin.investments.trading_signals', [
			'tradingSignals' => $tradingSignals,
		]);
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postTradingSignal(Request $request) {
		TradingSignal::query()->create([
			'pair' => $request->pair,
			'signal' => $request->signal,
			'entry' => $request->entry,
			'take_profit' => $request->take_profit,
			'stop_loss' => $request->stop_loss,
			'price' => $request->price,
		]);

		//send bulk notification
		(new PageController())->bulkNotificationsToAllUsers('Trading Signal', "Trading signal on $request->pair has been released.", 0);

		//cache the odds again
		(new CacheController())->put('trading-signals-new');
		(new CacheController())->refreshSignals();

		alert()->success('success', 'Trading signal posted successfully');
		return redirect()->back();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getManageTradingSignal() {
		$tradingSignals = (new CacheController())->tradingSignals();
		return view('admin.investments.manage_trading_signals', [
			'tradingSignals' => $tradingSignals,
		]);
	}

	/**
	 * @param int $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function deleteTradingSignal(int $id) {
		$signal = TradingSignal::query()->find($id);
		alert()->success('Deleted Signal', "You deleted $signal->pair signal.");
		$signal->delete();
		(new CacheController())->refreshTradingSignals();
		return redirect()->back();
	}

	/**
	 * @param int $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function outcomeTradingSignal(int $id) {
		$signal = TradingSignal::query()->find($id);
		return view('admin.investments.outcome_trading_signals', [
			'tradingSignal' => $signal,
		]);
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postOutcomeTradingSignal(Request $request) {
		$user = auth()->user();
		$signal =  TradingSignal::query()->find($request->signalID);
		$signal->outcome = $request->outcome;
		$signal->won = $request->won;
		$signal->update();
		alert()->success('Trading Outcome',"Trading signal $signal->pair has been closed successfully.");
		(new CacheController())->refreshTradingSignals();

		if ($signal->won) {
			$message = "$signal->pair outcome $request->outcome <<>> WON!";
		}else{
			$message = "$signal->pair outcome $request->outcome <<>> LOST!";
		}
		(new PageController())->bulkNotificationsToAllUsers($signal->pair,$message,$user->id);
		return redirect()->route('admin.manage.trading.signal');
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getManageBettingTips(){
		$odds =(new CacheController())->bettingOdds();
		return view('admin.investments.manage_sport_betting',[
			'odds'=>$odds
		]);
	}

	/**
	 * @param int $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function deleteSportBetting(int $id){
		$odd = BettingOdd::query()->find($id);
		alert()->success('Deleted Odd', "You deleted $odd->match odd.");
		$odd->delete();
		(new CacheController())->refreshBettingOdd();
		return redirect()->back();
	}

	/**
	 * @param int $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function outcomeBettingOdd(int $id){
		$odd = BettingOdd::query()->find($id);
		return view('admin.investments.outcome_betting_odd', [
			'odd' => $odd,
		]);
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postOutcomeBettingOdd(Request $request){
		$user = auth()->user();
		$odd =  BettingOdd::query()->find($request->oddID);
		$odd->outcome = $request->outcome;
		$odd->won = $request->won;
		$odd->update();
		alert()->success('Betting Outcome',"Betting odd $odd->match has been closed successfully.");
		(new CacheController())->refreshBettingOdd();
		if ($odd->won) {
			$message = "$odd->match outcome $request->outcome <<>> WON!";
			}else{
			$message = "$odd->match outcome $request->outcome <<>> LOST!";
		}
		(new PageController())->bulkNotificationsToAllUsers($odd->match,$message,$user->id);
		return redirect()->route('admin.manage.sport.betting');
	}

	/**
	 * @param int $action
	 * @param int $amount
	 * @param string $description
	 */
	public function createStatement(int $action, int $amount, string $description){
		AdminStatement::query()->create([
			'action'=>$action,
			'amount'=>$amount,
			'description'=>$description,
		]);
	}

	/**
	 * @return int
	 */
	public function getBalance(){
		return AdminStatement::query()->where('action',">" ,0)->sum('amount') - AdminStatement::query()->where('action',"<" ,0)->sum('amount');
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function statements(){
		$statements = AdminStatement::query()->orderByDesc('created_at')->get();
		return view('admin.finance.statements',[
			'statements'=>$statements
		]);
	}
}
