<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login.login");
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginGagal', "Login Gagal");
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate(); //hapus session
        $request->session()->regenerateToken(); //buat session baru
        return redirect('/');
    }
}
