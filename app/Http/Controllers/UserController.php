<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view("Login");
    }

    public function ClientIndex()
    {
        $clts = User::all();
        return view("Client", compact("clts"));
    }

    public function Login(Request $request)
    {
        $email = $request["email"];
        $pwd = $request["password"];
        $dbEmail = User::findByVal("email", $email);
        if ($dbEmail) {
            if (Hash::check($pwd, $dbEmail["password"])) {
                return redirect("/");
            } else {
                session()->flash("msg", "Email or password are incorrect. Please verify your information");
                return redirect("/login");
            }
        } else {
            session()->flash("msg", "Email or password are incorrect. Please verify your information");
            return redirect("/login");
        }
    }

    public function Register(Request $request)
    {
        $inp = $request->all();
        if (isset($inp["first_name"]) and isset($inp["last_name"])) {
            if ($inp["password"] == $inp["Rpassword"]) {
                $inp["first_name"] = $inp["first_name"] . " " . $inp["last_name"];
                $inp["password"] = Hash::make($inp["password"]);
                dd($request);
                User::create([
                    "name" => $inp["first_name"],
                    "email" => $inp["email"],
                    "password" => $inp["password"],
                    "role" => "user"
                ]);
            }
            return redirect("/login");
        } else {
            $inp["password"] = Hash::make($inp["password"]);
            User::create([
                "name" => $inp["name"],
                "email" => $inp["email"],
                "password" => $inp["password"],
                "role" => $inp["Role"]
            ]);

            return redirect("/Admin/Client");
        }
    }

    public function Edit($id)
    {
        $clt = User::find($id);
        return view("ClientEdit", compact("clt"));
    }

    public function Update(Request $request, $id)
    {
        $clt = User::find($id);
        $inp = $request->all();

        if ($inp['password'] == "") {
            $clt->name = $inp["name"];
            $clt->name = $inp["email"];
            $clt->name = $inp["role"];
            $clt->Update();
            return redirect("/Admin/Client");
        } else {
            $clt->name = $inp["name"];
            $clt->email = $inp["email"];
            $clt->password = Hash::make($inp["password"]);
            $clt->role = $inp["Role"];
            $clt->Update();
            return redirect("/Admin/Client");
        }
    }

    public function delete($id)
    {
        $clt = User::find($id);
        $clt->delete();
        return redirect("/Admin/Client");
    }
}
