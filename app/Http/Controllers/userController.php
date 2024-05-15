<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function register(Request $request){
        dd($request);
        $validate = $request->validate([
            'username' => 'required|max:12',
            'email' => 'required|email|max:50',
            'password'=> 'confirmed|required'
        ]);
        $emailExist = User::where('email',$validate['email'])->exists();
        if($emailExist){
            return view('hh');
            return redirect()->back()->with('message', 'this email has been taken');
        }
        $user = new User;
        $user->email=$request->email;
        $user->name=$request->name;
        $user->password=$request->password;
        return view('ll');

    }
    public function registerIndex(){
        return view('register');
    }
}
