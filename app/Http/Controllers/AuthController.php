<?php

namespace Matboksen\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Matboksen\Models\User;


class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }
    public function postSignup(Request $request)
    {
        $this->validate($request, [
        'email' => 'required|unique:users|email|max:255',
        'username' => 'required|unique:users|alpha_dash|max:20',
        'password' => 'required|min:6',
        ]);

    // Check that correct form is submitted before displaying validation
        User::create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->route('auth.signin')->with('info', 'Din konto er aktivert og du kan nå logge deg inn!');
        
    }
    public function getSignin()
    {
        return view('auth.signin');
    }
    public function postSignin(Request $request)
    {
            $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
            if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('info', 'Could not sign you in with those details.');
        }
        return redirect()->route('home')->with('info', 'Du er nå logget inn, din brilliante kulinariske jævel :)');
    }
    public function getSignout()
    {
        Auth::logout();
        return redirect()->route('auth.signin');
    }
}