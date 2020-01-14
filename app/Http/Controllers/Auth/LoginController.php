<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest')->except('logout');
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|string
	 */
	public function login(Request $request) {
		$user = User::query()->where('pin', $request->pin)->first();
		if (!$user) {
			return redirect()->back()->with('error', 'Invalid pin!');
		}

		auth()->loginUsingId($user->id);
		return redirect()->route('home');
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getAdminLogin() {
		return view('auth.admin_login');
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 * @throws \Exception
	 */
	public function postAdminLogin(Request $request) {
		$this->validate($request, [
			'phoneNumber' => 'required',
			'password' => 'required',
		]);

		$phoneNumber = $request->phoneNumber;

		$credentials = \request(['phoneNumber', 'password']);
		if (!auth()->guard('admin')->attempt($credentials)) {
			$log = [
				'phoneNumber' => $phoneNumber,
				'message' => "FAILED to login  at " . Carbon::now(),
			];
			PageController::log($log, 'error', 'admin-login-error');
			return redirect()->back()->with('error', 'Sorry that did\'t work, please try again.');
		}

		$log = [
			'Admin_name' => auth('admin')->user()->name,
			'admin_phoneNumber' => $phoneNumber,
			'message' => "successfully verified password in at " . Carbon::now(),
		];
		PageController::log($log, 'success', 'admin-login');

		return redirect()->route('admin.home');
	}

}
