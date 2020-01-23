<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function index(){
        $site_info = DB::select('select * from site_info');
        return view("cart.cart_items", ["site" => $site_info[0]]);
    }
}
