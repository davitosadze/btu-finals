<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Hash;
use Validator;

class UserController extends Controller
{
    public function login() {
        return view("user.login");
    }

    public function authorization(Request $req) {
        $email = $req->email;
        $password = $req->password;

        $user = User::where('email', $email)->first();
        if(!isset($user)) {
            return redirect()->back()->with('status', 'მომხმარებელი ვერ მოიძებნა');
        }
        if(Hash::check($password, $user->password)) 
        {
            Session::put('userName', $user->name);
            Session::put('userId', $user->id);
            Session::put('isLogged', 1);
            return redirect('/');
        }
        else {
            return redirect()->back()->with('status', 'პაროლი არასწორია');
        }

    }

    public function register() {
        return view("user.register");

    }


    public function registration(Request $req) {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'name' => $req->name,
            'password' => Hash::make($req->password),
            'email' => $req->email
        ]);

        return redirect("/login");
    }


    public function logout() {
        Session::forget('isLogged');
        Session::forget('userId');
        Session::forget('userName');
        return redirect("/");

    }
}
