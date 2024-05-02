<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create (){
        return view ('users.register');
    }

    public function store (Request $request) {
        $fromFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => ['required','confirmed','min:7'],
        ]);

        //Hash Password
        $fromFields['password'] = bcrypt($fromFields['password']);

        //Create User
        $user = User::create($fromFields);

        //Login

        auth()->login($user);

        return redirect('/')->with('message','User created and logged in');
    }

    public function logout (Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('messeage','You have been logged out!');

    }

    public function login () {
        return view ('/users.login');
    }

}
