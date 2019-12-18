<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    //

    public function index(){
        return view("store.auth.login", ["title" => "Login"]);
    }

    public function postLogin(Request $request){
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // $credentials = $request->only("email", "password");

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'store'])){
            if (Auth::user()->role != "store"){
                $request->session()->flush();
                Auth::logout();
            }
            return redirect()->route('store_dashboard');
        }
        $error = "Invalid login credentials";

        return redirect()->route("store_login", ['error' => $error]);
    }

    public function register(){
        return view("store.auth.register", ["title" => "Register"]);
    }

    public function postRegistration(Request $request){
        request()->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required|min:6"
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return redirect()->route("store_dashboard");
    }

    private function create(array $data){
        return User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "role" => "store",
            "password" => Hash::make($data["password"])
        ]);
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect()->route("store");
    }
}
