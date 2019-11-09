<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //

    public function index(){
        $stores = DB::select('select * from stores');
        $products = DB::select('select * from products LIMIT 12');

        return view("welcome", ["stores" => $stores, "products" => $products]);
    }
}
