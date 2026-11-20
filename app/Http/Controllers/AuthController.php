<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function auth(){
        return view("auth.login");
    }
    public function registerForm(){
        return view("auth.register");
    }
    public function logIn(Request $request){

    $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

         if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

      public function register(Request $request){

    $validation = $request->validate([
            'email' => ['required', 'email'],
             'name' => ['required'],
            'password' => ['required'],
        ]);
     
        User::create($validation);

        
            return redirect()->intended('login');
        
    }
     
}
