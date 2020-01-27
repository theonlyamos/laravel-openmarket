<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //



    public function buy(Request $request){
        $keys = $request->all();
        return response()->json(["keys" => $keys]);
        //$products = DB::select('select * from products where id in ?', [1,2]);
    }
}
