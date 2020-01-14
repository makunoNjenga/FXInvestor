<?php

namespace App\Http\Controllers;

use App\BettingOdd;
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
		return view('admin.investments.sport_betting');
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postSportBetting(Request $request){
		$odds= BettingOdd::query()->create([
			'match'=>$request->match,
			'pick'=>$request->pick,
			'odd'=>$request->odd,
			'kick_off'=>$request->kick_off,
			'price'=>$request->price,
		]);
		alert()->success('success','Odd posted successfully');
		return redirect()->back();
	}
}
