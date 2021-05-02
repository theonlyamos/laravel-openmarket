<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct(){
      $this->middleware('user')->except('logout');
    }

    public function index(Request $request){
        return redirect()->route('user.dashboard');
    }


    public function page(Request $request, $page = ""){
        $page_names = ['dashboard', 'orders', 'profile', 'settings'];
        $pages = ['dashboard' => ['name' => 'dashboard', 'icon' => 'fa-tv'],
                  'orders' => ['name' => 'orders', 'icon' => 'fa-shopping-cart'],
                  'profile' => ['name' => 'profile',  'icon' => 'fa-user'],
                  'settings' => ['name' => 'settings', 'icon' => 'fa-gear']];

        if (!empty($page)){
            $page = strtolower($page);
            if (in_array($page, $page_names)){
                return view("user.$page", ["pages" => $pages, "curpage" => $page, 'cart' => count($request->session()->get('cart.items', []))]);
            }
        }
        return view('user.dashboard', ["pages" => $pages, "curpage" => "dashboard"]);
    }

}
