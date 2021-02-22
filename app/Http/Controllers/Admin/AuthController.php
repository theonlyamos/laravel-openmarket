<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\Admin;
use App\Http\Requests\adminPost;

use App\Models\SiteInfo;

class AuthController extends Controller
{
    //

    public function index(){
        $site_info = SiteInfo::first();
        return view("admin.auth.login", ["title" => "Login", 'site' => $site_info]);
    }

    public function postLogin(Request $request){
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only("email", "password");
        var_dump($credentials);
        if (Auth::guard('admin')->attempt($credentials)){
            return redirect()->intended('dashboard');
        }
        $error = "Invalid login credentials";

        return redirect()->route("admin.login", ['error' => $error]);
    }

    public function register(){
        $site_info = SiteInfo::first(); 
        return view("admin.auth.register", ["title" => "Register", 'site' => $site_info]);
    }

    public function postRegistration(adminPost $request){
        $data = $request->validated();

        $admin = $this->create($data);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)){
            return redirect()->intended('dashboard');
        }
        return redirect()->route("admin.register")->withInput();
    }

    private function create(array $data){
        return Admin::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => Hash::make($data["password"])
        ]);
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::guard('admin')->logout();
        return redirect()->route("admin.index");
    }
}
