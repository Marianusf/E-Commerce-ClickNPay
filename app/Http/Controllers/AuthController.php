<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Show the login form view.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('Auth.Login');
    }
}
