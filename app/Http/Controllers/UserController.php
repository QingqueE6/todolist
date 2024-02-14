<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // https://laravel.com/docs/10.x/validation#available-validation-rules Official overview of all validation options available in Laravel


    public function admin(Request $request){
        
    return view("admin");

    }

// -------------------------------------------------------------------------------------------------------------------------

    public function register(Request $request){

        $userdata = $request->validate([

            "username" => "required|min:2|max:20", Rule::unique("users", "username"),
            "email" => "required|email", Rule::unique("users", "email"),
            "password" => "required|min:6|confirmed",


        ]);

        $userdata["password"] = bcrypt($userdata["password"]); //Encrypts the password in the database 

        User::create($userdata);

        return redirect("/");

    }

// -------------------------------------------------------------------------------------------------------------------------

    public function login(Request $request){

        $userdata = $request->validate([

            "username-login" => "required",
            "password-login" => "required"

        ]);

        if (auth()->attempt(["username" => $userdata["username-login"],
                            "password" => $userdata["password-login"] ]))  
             {
                $request->session()->regenerate();
                return redirect("/");
        }
        else {
            return redirect("/");
        }

    }

 // -------------------------------------------------------------------------------------------------------------------------

    public function logout(Request $request) {
 
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
      }

// -------------------------------------------------------------------------------------------------------------------------


}