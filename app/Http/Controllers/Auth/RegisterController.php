<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Ministry;
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

    public function showRegistrationForm() {
        
        $ministries = Ministry::all();
    
        return view ('auth.register', compact('ministries'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $arabic = array(
            'name.required'=>'يجب ادخال الاسم',
            'ministry.required'=>'يجب اختيار الوزاره',
            'password.required'=>'يجب ادخال الرقم السري',
            'email.required'=>'يجب ادخال البريد',
            'password.min'=>'اقصى حد للرقم السري 6 خانات',
            'password.confirmed'=>'الرقم السري غير متطابق',
            'password.string'=>'الرقم السري يجب ان يكون نص',
            'email.email'=>'صيغة البريد غير صحيحه',
            'name.max'=>'تجاوزة الحد في لاسم'
        );
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'ministry'=>'required'
        ],$arabic);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)     
    {    
        $avatar;
        
        if($data['gender'])
        {
            $avatar = 'public/default/avatars/male.png';
        }
        else
        {
            $avatar = 'public/default/avatars/female.png';
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'ministry_id' => $data['ministry'],
            'avatar'=>$avatar,
            'gender'=> $data['gender']
        ]);
    }
}
