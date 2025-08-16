<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{

    public function index()
    {
        // Logic for displaying the login page
        return view('login'); // Assuming you have a login view at resources/views/login/index.blade.php
    }
    public function login(LoginRequest $request)
    {
        // return "Login Post Request";

        dd ($request->all());
        // Logic for handling the login request
        // Validate the request, authenticate the user, etc.
        
        // Example validation

        // $request->validate([
        //     // "username" => 'required|alpha',
        //     "username" => ['required','alpha'],
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        // ],[
        //     'username.required' => 'نام کاربری الزامی است',
        //     'username.alpha' => 'نام کاربری باید فقط شامل حروف باشد',
        //     'email.required' => 'ایمیل الزامی است',
        //     'email.email' => 'ایمیل معتبر نیست',
        //     'password.required' => 'رمز عبور الزامی است',
        //     'password.min' => 'رمز عبور باید حداقل 6 کاراکتر باشد',
        // ]);
        
        //         $request->validate([
        //     // "username" => 'required|alpha',
        //     "username" => ['required','alpha'],
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        // ]);

        // Authentication logic here...

        // Redirect or return response
        // return redirect()->route('home')->with('success', 'Logged in successfully!');
    }
}