<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class authController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function loginAccount(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('pets.index')->withSuccess('You have successfully logged in!');
        }

        return back()->with('error', 'Error email and password!');
    }

    public function registerAccount(Request $request){
        $usersave = new User();

        $usersave->firstname = $request->firstname;
        $usersave->lastname = $request->lastname;
        $usersave->email = $request->email;
        $usersave->password = Hash::make($request->password);

        $usersave->save();

        return redirect()->route('login')->withSuccess('You have successfully logged in!');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
