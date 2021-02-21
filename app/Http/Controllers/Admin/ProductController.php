<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\ProductPost;
use App\Http\Requests\ProductUpdate;

use App\Models\Admin;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $pages = ["dashboard" => ["name" => "dashboard", "icon" => "flaticon2-analytics-2"],
                  "stores"    => ["name" => "stores",    "icon" => "flaticon-medal"],
                  "products"  => ["name" => "products",  "icon" => "flaticon-app"],
                  "orders"    => ["name" => "orders",    "icon" => "flaticon-shopping-basket"],
                  "customers" => ["name" => "customers", "icon" => "flaticon2-customers"],
                  "reports"   => ["name" => "reports",   "icon" => "flaticon2-graph"],
                  "profile"   => ["name" => "profile",   "icon" => "flaticon-user"],
                  "settings"  => ["name" => "settings",  "icon" => "flaticon2-settings"]];

    public $site_info = "";

    public function __construct(){
        $this->middleware('admin');
        $this->site_info = DB::select('select * from site_info');
    }


    public function index()
    {
        //
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $products = Product::orderBy('id', 'desc')->paginate(20);
        $min_price = DB::table('products')->min('price');
        $max_price = DB::table('products')->max('price');

        return view('admin.products.index', ['title' => 'products', 'pages' => $this->pages, 'admin' => $admin, 'site_info' => $this->site_info, 'products' => $products, 'min_price' => $min_price, 'max_price' => $max_price]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductPost $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $product = Product::find($id);
        $keys = $product->keywords;
        $keywords = explode(",", $keys);
        $site_info = DB::select('select * from site_info');

        return response()->json(['success' => true, 'product' => $product]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdate $request, $id)
    {
        //
        $product_update = $request->validated();
        $product = Product::find($id);
        if ($request->hasFile('thumbnail')){
            $product->thumbnail['thumbnail'] = explode("/", $request->thumbnail->store("public"))[1];
        }
        $product->fill($product_update);
        $product->save();
        return response()->json(["success" => true, "message" => "Product updated successfully", "product" => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
