<?php

namespace App\Http\Controllers;

use App\BettingOdd;
use App\BoughtBettingOdd;
use App\BoughtTradingSignal;
use App\TradingSignal;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class CacheController extends Controller
{
	/**
	 * CACHE KEYS
	 * betting-odds-new
	 * trading-signals-new
	 * bought-odds-all
	 * bought-signals-all
	 * odds
	 * signals
	 */

	/**
	 * CacheController constructor.
	 */
	public function __construct() {
		$this->time = 120;
	}

	public function put(string $key){
		//new netting odds
		if ($key =="betting-odds-new"){
			$data = BettingOdd::query()->whereNotNull('outcome')->orderByDesc('created_at')->get();
			Cache::put($key,$data,$this->time);
		}

		if ($key == "trading-signals-new"){
			$data = TradingSignal::query()->whereNotNull('outcome')->orderByDesc('created_at')->get();
			Cache::put($key,$data,$this->time);
		}
		if ($key == "bought-odds-all"){
			$data = BoughtBettingOdd::all();
			Cache::put($key,$data,$this->time);
		}
		if ($key == "bought-signals-all"){
			$data = BoughtTradingSignal::all();
			Cache::put($key,$data,$this->time);
		}
		if ($key == "odds"){
			$data = BettingOdd::all();
			Cache::put($key,$data,$this->time);
		}
		if ($key == "signals"){
			$data = TradingSignal::all();
			Cache::put($key,$data,$this->time);
		}

	}

	/**
	 * @param string $key
	 */
	public function remove(string $key){
		Cache::forget($key);
	}

	/**
	 * @return mixed
	 */
	public function bettingOdds(){
		// Create the cache key
		$key = 'betting-odds-new';

		if (!Cache::get($key)) {
			Cache::remember($key, $this->time, function () {
				return BettingOdd::query()->where('outcome',null)->orderByDesc('created_at')->with('BoughtBettingOdd')->get();
			});
		}

		return Cache::get($key);
	}
	public function odds(){
		// Create the cache key
		$key = 'odds';

		if (!Cache::get($key)) {
			Cache::remember($key, $this->time, function () {
				return BettingOdd::all();
			});
		}

		return Cache::get($key);
	}

	/**
	 * @return mixed
	 */
	public function signals(){
		// Create the cache key
		$key = 'signals';

		if (!Cache::get($key)) {
			Cache::remember($key, $this->time, function () {
				return TradingSignal::all();
			});
		}

		return Cache::get($key);
	}
	/**
	 * @return mixed
	 */
	public function boughtOdds(){
		// Create the cache key
		$key = 'bought-odds-all';

		if (!Cache::get($key)) {
			Cache::remember($key, $this->time, function () {
				return BoughtBettingOdd::all();
			});
		}

		return Cache::get($key);
	}
	/**
	 * @return mixed
	 */
	public function boughtSignals(){
		// Create the cache key
		$key = 'bought-signals-all';

		if (!Cache::get($key)) {
			Cache::remember($key, $this->time, function () {
				return BoughtTradingSignal::all();
			});
		}

		return Cache::get($key);
	}
/**
	 * @return mixed
	 */
	public function tradingSignals(){
		// Create the cache key
		$key = 'trading-signals-new';

		if (!Cache::get($key)) {
			Cache::remember($key, $this->time, function () {
				return TradingSignal::query()->where('outcome',null)->orderByDesc('created_at')->with('BoughtTradingSignal')->get();
			});
		}

		return Cache::get($key);
	}

	public function refreshBettingOdd(){
		$this->remove('betting-odds-new');
		$this->bettingOdds();
	}
	public function refreshTradingSignals(){
		$this->remove('trading-signals-new');
		$this->bettingOdds();
	}
	public function refreshBoughtOdds(){
		$this->remove('bought-odds-all');
		$this->boughtOdds();
	}
	public function refreshBoughtSignals(){
		$this->remove('bought-signals-all');
		$this->boughtSignals();
	}
	public function refreshOdds(){
		$this->remove('odds');
		$this->odds();
	}
	public function refreshSignals(){
		$this->remove('signals');
		$this->signals();
	}
}
