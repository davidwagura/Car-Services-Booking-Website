<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Service;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // public function index(){
    //     return view('pages.index');  
    // }

    // public function bookService(){
    //     return view('pages.services');
    // }


    public function registrationPage()
    {

        return view('Auth.Registration');

    }

    public function loginPage()
    {

        return view('Auth.Login');

    }

    public function register(Request $request)
    {
        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => $request->password,

            'car_registration_number' => $request->car_registration_number

        ]);

        return redirect('/login');

    }

    public function login(Request $request)
    {
        $request->validate([

            'email' => 'required',

            'password' => 'required',

        ]);

        $user = User::where('email', $request->email)->where('password', $request->password)->first();


        if(!empty($user)) {

            if($user->email === $request->email & $user->password === $request->password){
                
                $token  = $user->createToken("myToken")->plainTextToken;

                return redirect('/services');

            }

            return 'Invalid credentials';
        }

        return 'User not found.';

    }

    public function services(){
        
        return view('pages.services');

    }

    public function userService(){

        $user = User::where('user_id', $user_id)
    }


}