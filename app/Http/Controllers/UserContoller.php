<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserContoller extends Controller
{
    public function register(Request $request){
        
        $incomigFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $incomigFields['password']= bcrypt($incomigFields['password']);
        $user = User::create($incomigFields);
        auth()->login($user);
        return redirect('/');
    }

    // Logout 
    public function logout(){
        auth()->logout();
        return redirect('/');

    }

    // login
    public function login(Request $request){
        $incomigFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);
        
        if(auth()->attempt(['name' => $incomigFields['loginname'] , 'password' => $incomigFields['loginpassword']])){

            $request->session()->regenerate();
        }

        return redirect('/');
    }
}
