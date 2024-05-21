<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password'=> 'confirmed|required'
        ]);
        User::create($validated);
        return redirect('/login');

    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
}
