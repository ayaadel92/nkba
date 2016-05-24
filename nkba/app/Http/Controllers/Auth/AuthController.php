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

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:255',
            
             'member_number'=>'required|max:50|unique:users',
             'number_health_care'=>'required|max:50|unique:users',
             'national_id'=>'required|max:50|unique:users',
             'address'=>'required|max:255',
             'phone_number'=>'required|max:255',
            'date_of_birth'=>'required|max:255',
            'graduation_year'=>'required|max:255',
            
            
            'number_part'=>'max:255',
            'Gidender'=>'required|max:255',            
            'credit_number'=>'max:255',
            'path'=>'required|max:255',
           // 'graduation_year'=>'required|max:255',

            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            
            'member_number' => $data['member_number'],
            'number_health_care' => $data['number_health_care'],
            'national_id' => $data['national_id'],
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],
            'date_of_birth' => $data['date_of_birth'],
            
            'graduation_year' => $data['graduation_year'],
            'Gidender' => $data['Gidender'],
            'number_part' => $data['number_part'],
            
            
            
            
            
            
            
            
            'password' => bcrypt($data['password']),
        ]);
    }
}
