<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // functionalities on user register 
    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        // first add validations on formfields like before on the form
        // add form with validation
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required|confirmed|min:6',
        ]);



        // hash passord
        // for the db table
        $formFields['password'] = bcrypt($formFields['password']);

        // here i'm creating the user
        // and automatically login

        $user = User::create($formFields);

        // auth
        auth()->login($user);

        return redirect('/')->with('message', 'user created and logged in');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'you logged out');
    }

    // show lohgin form

    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        // add form with validation
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if(auth()->attempt()){
            $request->session()->regenerate();

            return redirect('/')->with('message','you are now logged in');
        }

        return back()->withErrors(['email','invalid credentials'])->onlyInput('email');
    }
}
