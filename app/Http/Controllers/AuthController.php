<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view("pages.Auth.register");
    }

    public function store()
    {
        // dump(request()->all());
        //validate
        //create
        //redirect

        $validated = request()->validate(
            [
                'name' => ' required|min:3|max:40',
                'username' => 'required|min:3|max:10',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:3',
            ]
        );

        User::create(
            [
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),

            ]
        );


        return redirect()->route("homepage")->with("success", "you successfully created an account");
    }


    public function login()
    {
        return view('pages.Auth.login');
    }

    public function authenticate()
    {

        $validated = request()->validate(
            [
                'username' => 'required|min:3',
                'password' => 'required|min:3',
            ]
        );

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();
            return redirect()->route('Dashboard')->with('success', 'successfully login');
        }

        return redirect()->route('login')->withErrors(
            [
                'username' => 'Not match',
                'password' => 'Password not match the username'
            ]
        );

    }
    // $validated = request()->validate(
    //     [
    //         'name' => ' required|min:3|max:40',
    //         'username' => 'required|min:3|max:10',
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|confirmed|min:3',
    //     ]
    // );

    // return redirect()->route("homepage")->with("success", "you successfully created an account");

}
