<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register Form
    public function create()
    {
        return view('users.register');
    }

    // Store Register Data
    public function store(Request $request)
    {

        $fromFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:7'],
        ]);

        //Hash Password
        $fromFields['password'] = bcrypt($fromFields['password']);

        //Create User
        $user = User::create($fromFields);

        //Login
        auth()->login($user);

        //return to /
        return redirect('/')->with('message', 'User created and logged in');
    }

    //Logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('messeage', 'You have been logged out!');
    }

    // Show login Form
    public function login()
    {
        return view('/users.login');
    }

    public function authenticate(Request $request)
    {

        $fromFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($fromFields)) {

            $request->session()->regenerate();

            return redirect('/')->with('message', 'you are now logged in !!!');
        }

        return back()
            ->withErrors(['email' => 'Inavlid Credentials'])
            ->onlyInput('email');
    }
}
