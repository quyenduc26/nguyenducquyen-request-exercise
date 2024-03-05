<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {

        $username = $request->input('username');
        $name = $request->input('name');
        $password = $request->input('password');

        echo "Username: $username<br>";
        echo "Name: $name<br>";
        echo "Password: $password";
    }
}
