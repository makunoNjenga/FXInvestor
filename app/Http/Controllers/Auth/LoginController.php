<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|string
	 */
    public function login(Request $request) {
    	$user = User::query()->where('pin',$request->pin)->first();
    	if (!$user){
    		return redirect()->back()->with('error','Invalid pin!');
	    }

	    auth()->loginUsingId($user->id);
    	return redirect()->route('home');
    }


}
