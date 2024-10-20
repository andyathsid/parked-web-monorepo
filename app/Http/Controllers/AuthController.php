<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Console\View\Components\Alert;
// use Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('Login.loginUser');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // \dd($request);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // $user->sendEmailVerificationNotification();

        return redirect()->route('login')->with('Registrasi Sukses', 'Registrasi berhasil! Silakan verifikasi email Anda.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect()->route('login')->with('loginBerhasil', 'Login berhasil! Selamat datang!');
            } else {
                return redirect()->route('login')->with('loginGagal', 'Email atau Password Salah!');
            }
        } else {
            return redirect()->route('login')->with('loginGagal', 'Email tidak terdaftar!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }

    public function resendVerificationEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Email verifikasi telah dikirim ulang.');
    }
}
