<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function form(){
        return view('auth.login');
    }

    public function login(){
        $validated= request()->validate([
            'email' => "required|email",
            "password" => 'required|min:8',
        ]);

        if(auth()->attempt($validated)){
            request()->session()->regenerate();
            return redirect()->route('home')->with('success', 'successfully loggedin');
        }else{
            return redirect()->route('login.create')->with('error', "User with this email not found");
        }

    }

    public function destroy(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login.create')->with('success', 'you logged out successfully');
    }
}
