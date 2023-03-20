<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function regShow() {
        return view('register');
    }

    public function logShow() {
        return view('login');
    }

    public function getDataRegister (Request $req) {
        $formFields = $req->validate([
            'ime' => 'required',
            'prezime' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);
        //return $req->input();

        // password hash validation
        $formFields['password'] = bcrypt($formFields['password']);

        // kreiranje user-a
        $user = User::create($formFields);
        return redirect()->route('login');
        // return view('/login');
    }

    public function getDataLogin (Request $req) {
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $req->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->route('pocetna');
        }
        return redirect(route('login'))->with('error', 'login details are not valid');
    }
}
