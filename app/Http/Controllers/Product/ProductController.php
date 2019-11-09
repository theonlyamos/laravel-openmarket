<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

    public function index(){
        return "Hello World";
    }

    public function details($url){
        $product = DB::select('select * from products where url = ?', [$url]);
        $keys = $product[0]->keywords;
        $keywords = explode(",", $keys);
        return view("product.details", ["product" => $product, "keywords" => $keywords]);
    }
}
