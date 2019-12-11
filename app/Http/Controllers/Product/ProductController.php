<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

    public function index(){
        return redirect("/");
    }

    public function details($id){
        $product = Products::where("id", $id)->first();
        $keys = $product->keywords;
        $keywords = explode(",", $keys);
        return view("product.details", ["product" => $product, "keywords" => $keywords]);
    }
}
