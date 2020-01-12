<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\PageController;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'numeric', 'digits:10', 'unique:users'],
        ]);
    }

	/**
	 * Create a new user instance after a valid registration.
	 * @param array $data
	 * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
	 */
    protected function create(array $data)
    {
	    $pin = $this->generatePin();
         $user = User::query()->create([
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
	        'pin'=>$pin
        ]);

         //send sms and notification
	    $message = "Your login pin is $pin. Keep it a secret.";
//	    PageController::sendNotification($user->id,'Login Pin', $message);

	    return $user;
    }

	/**
	 * @return int
	 */
    public function generatePin(){
    	$pin = rand(1000,9999);

    	$exits = User::query()->where('pin',$pin)->first();

    	if ($exits){
    		return $this->generatePin();
	    }
	    return $pin;
    }
}
