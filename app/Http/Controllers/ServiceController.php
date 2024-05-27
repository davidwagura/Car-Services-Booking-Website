<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // public function index(){
    //     return view('pages.index');  
    // }

    // public function bookService(){
    //     return view('pages.book_service');
    // }

    // public function services(){
    //     return view('pages.services');
    // }

    public function registrationPage()
    {
        return view('Auth.Registration');

    }

    public function register(Request $request)
    {
        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => $request->password,

            'car_registration_number' => $request->car_registration_number

        ]);


    }
    // public function login(Request $request)
    // {
    //   $user = User::  
    // }

    // public function data(){
    //     return Service::all();
    // }

}