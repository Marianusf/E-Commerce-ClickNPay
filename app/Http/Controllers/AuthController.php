<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
    public function showRegistrasiForm()
    {
        return view('Auth.Registrasi');
    }
    public function register(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:user,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => 'buyer', // default buyer
            'status' => 'active', // default active
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('loginForm')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
