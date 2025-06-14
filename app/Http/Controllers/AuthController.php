<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
        // Validasi data input (hanya nama, email, password)
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:user,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Buat user baru dengan role buyer dan status aktif
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'buyer', // default buyer
            'status' => 'active', // default active
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('loginForm')->with('success', 'Registrasi berhasil! Silakan login.');
    }
    public function login(Request $request)
    {
        // Redirect ke dashboard peminjam
        return redirect()->route('home')->with('message', 'Login berhasil sebagai Peminjam');
    }
}
