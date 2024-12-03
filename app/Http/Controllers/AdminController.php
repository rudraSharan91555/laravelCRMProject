<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function login(Request $req)
    // {
    //     $submit = $req['submit'];
    //     if ($submit == 'submit'){
    //         die('button pressed');
    //     }
    // return view('login');
    // }
    public function loginForm()
    {
        return view('login');  // Return the login view
    }

    // Method to handle form submission (POST request)
    public function login(Request $req)
    {
        $submit = $req['submit'];
        if ($submit == 'submit') {
            die('Button pressed');
        }
        return view('login');
    }

}
