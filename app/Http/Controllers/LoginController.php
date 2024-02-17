<?php

namespace App\Http\Controllers;

use App\Mail\ResetPwd;
use App\Models\Token;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;

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

    public function newPasswordPAge(string $token)
    {
    }
    public function reset(Request $request)
    {
        $email = $request->email;
        $user = User::where("email", $email)->first();
        if ($user) {
            $token = uniqid() . "" . uniqid() . "" . uniqid();
            Mail::to($request->email)->send(new ResetPwd($token));
            $tok = Token::where("email", $email)->first();
            if ($tok) {
                $tok->update([
                    "token" => $token,
                ]);
            } else {
                Token::create([
                    'email' => $email,
                    "token" => $token
                ]);
            }
            return redirect()->back()->with("msg", "success");
        } else {
            return redirect()->back()->with("msg", "invalid Email");
        }
    }
}
