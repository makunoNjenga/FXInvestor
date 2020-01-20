<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
     * @return RedirectResponse|string
     */
    public function login(Request $request)
    {
        $credentials = \request(['phone_number', 'password']);
        if (!auth()->attempt($credentials)) {
            return redirect()->back()->with('error', 'Sorry that did\'t work, please try again.');
        }
        return redirect()->route('home');
    }

    /**
     * @return Factory|View
     */
    public function getAdminLogin()
    {
        return view('auth.admin_login');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function postAdminLogin(Request $request)
    {
        $this->validate($request, [
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        $phoneNumber = $request->phone_number;

        $credentials = \request(['phone_number', 'password']);
        if (!auth()->guard('admin')->attempt($credentials)) {
            $log = [
                'phone_number' => $phoneNumber,
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
