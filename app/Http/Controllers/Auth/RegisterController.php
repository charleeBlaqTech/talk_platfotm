<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function form(){
        return view('auth.register');
    }

    public function register(){
        $validated = request()->validate([
            'fullname' => "required|",
            'email' => "required|email|unique:users,email",
            'password' => 'required|min:8|confirmed',
            // 'image' => 'image',
        ]);

        // $validated = [
        //     'fullname' => request('fullname'),
        //     'email' => request('email'),
        //     'password' => request('password'),
        //     'image' => ""
        // ];


        if(request()->has('image')){
            $imagePath= request()->file('image')->store("user_images", "public");
            $validated['image'] = $imagePath;
        }


        if($validated){
            User::create([
                'name' => $validated["fullname"],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                // 'image' => $validated['image']

            ]);
            return redirect()->route('home')->with('success', 'successfully created user');
        }else{
            return redirect()->route('register.create')->with('error', 'query failed to create user');
        }


    }
}
