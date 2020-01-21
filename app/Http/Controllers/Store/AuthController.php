<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Store;
use App\Http\Requests\storePost;

class AuthController extends Controller
{
    //

    public function index(){
        $site_info = DB::select('select * from site_info');
        return view("store.auth.login", ["title" => "Login", 'site' => $site_info[0]]);
    }

    public function postLogin(Request $request){
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // $credentials = $request->only("email", "password");
        $credentials = $request->only('email', 'password');
        if (Auth::guard('store')->attempt($credentials)){
            return redirect()->intended('dashboard');
        }
        $error = "Invalid login credentials";

        return redirect()->route("store.login", ['error' => $error]);
    }

    public function register(){
        $site_info = DB::select('select * from site_info');
        return view("store.auth.register", ["title" => "Register", 'site' => $site_info[0]]);
    }

    public function postRegistration(storePost $request){
        $data = $request->validated();

        $store = $this->create($data);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('store')->attempt($credentials)){
            return redirect()->intended('store.dashboard');
        }
        return redirect()->route("store.register");
    }

    private function create(array $data){
        return Store::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "address" => $data['address'],
            "location" => $data['location'],
            "region" => $data['region'],
            "city" => $data['city'],
            "postal" => $data['postal'],
            "password" => Hash::make($data["password"])
        ]);
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::guard('store')->logout();
        return redirect()->route("store.index");
    }
}
