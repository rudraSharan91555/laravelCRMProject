<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $req)
    {
        $submit = $req['submit'];
        if ($submit == 'submit') {
            $req->validate([
                'email' => 'required|email',  
                'password' => 'required|min:6',  
            ]);    
            if (\Auth::attempt($req->only('email', 'password'))) {
                return redirect('/home');
            } else {
                return redirect('/login')->with('error', 'Incorrect Username or Password');
            }
        }
        return view('login');
    } 
    public function dashboard(){
        return view('main');
    }
    public function logout(){
        Session.flush();
        \Auth::logout();
        return redirect('/login');
    }
}
