<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

// <<<<<<< HEAD
//     /**
//      * Where to redirect users after login / registration.
//      *
//      * @var string
//      */
//     protected $redirectTo = '/';
    
//      protected $username = 'member_id';
// =======
    protected $redirectAfterLogout = 'login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectAfterLogout = config('quickadmin.homeRoute');
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
<<<<<<< HEAD
            'name' => 'required|max:255',//
            
             'member_id'=>'required|max:50|unique:users',

            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
=======
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
>>>>>>> 3426d32aa240552455ec28ce43ef49f8ca10a1f4
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
<<<<<<< HEAD
            'name' => $data['name'],
            'email' => $data['email'],
            
            'member_id' => $data['member_id'], 
=======
            'name'     => $data['name'],
            'email'    => $data['email'],
>>>>>>> 3426d32aa240552455ec28ce43ef49f8ca10a1f4
            'password' => bcrypt($data['password']),
        ]);
    }

}
