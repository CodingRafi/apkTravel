<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    
    public function create(){
        return view("dashboard.registrasi.index");
    }

    public function store(Request $request){
        $validated = $request->validate([
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/dashboard')->with('success', 'Registration successfull');
    }

}
