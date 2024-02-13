<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("Login");
    }

    public function Register()
    {
        return view("Register");
    }

    public function NewPassword()
    {
        return view("NewPassord");
    }
}
