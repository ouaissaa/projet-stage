<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password'=> 'confirmed|required'
        ]);
        User::create($validated);
        return redirect()->route('login');

    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return view('login');
    }


    public function authenticate(Request $request){
        $credentials = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials->validated())) {
            $request->session()->regenerate();
            return redirect()->route("index");
        }
        return response("Failed to login");
    }
}
