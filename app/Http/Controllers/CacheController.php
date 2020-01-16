<?php

namespace App\Http\Controllers;

use App\BettingOdd;
use App\TradingSignal;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class CacheController extends Controller
{
	/**
	 * CACHE KEYS
	 * betting-odds-new
	 * trading-signals-new
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
}
