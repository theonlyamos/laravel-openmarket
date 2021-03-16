<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeProductPost;
use App\Http\Requests\storeProductUpdate;

use App\Models\Store;
use App\Models\Product;
use App\Models\SiteInfo;
use App\Models\StoreProduct;

class ProductController extends Controller
{
    protected $pages = ["dashboard" => ["name" => "dashboard", "icon" => "flaticon2-analytics-2"],
                  "stores"    => ["name" => "stores",    "icon" => "flaticon-medal"],
                  "products"  => ["name" => "products",  "icon" => "flaticon-app"],
                  "orders"    => ["name" => "orders",    "icon" => "flaticon-shopping-basket"],
                  "customers" => ["name" => "customers", "icon" => "flaticon2-group"],
                  "reports"   => ["name" => "reports",   "icon" => "flaticon2-graph"],
                  "profile"   => ["name" => "profile",   "icon" => "flaticon-user"],
                  "settings"  => ["name" => "settings",  "icon" => "flaticon2-settings"]];

    public $site_info = "";

    public function __construct(){
        $this->middleware('store');
        $this->site_info = SiteInfo::first();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = Store::find(Auth::guard('store')->user()->id);
        $products = StoreProduct::orderBy('id', 'desc');
        //$min_price = DB::table('products')->min('price');
        //$max_price = DB::table('products')->max('price');

        return view('store.products.index', ['title' => 'products', 'pages' => $this->pages, 'store' => $store, 'site_info' => $this->site_info, 'products' => $products]);
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
     * @param  \App\Http\Requests\storeProductPost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeProductPost $request)
    {
        $product = StoreProduct::create($request->validated());

        return response()->json(["success" => true, "message" => "Product added successfully", "product" => $product, "title" => "Add Product"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //
        if ($request->has('_method') && $request->input('_method') == 'delete'){
            $product = StoreProduct::find($id);
            if ($product->images){
                foreach ($product->images as $image){
                    Storage::delete($image->fullpath);
                    $image->delete();
                }
            }
            StoreProduct::destroy($id);
            return response()->json(["success" => true, "message" => "Product deleted successfully", "product" => $product]);
        }
        $product = StoreProduct::find($id);
        return response()->json(['success' => true, 'product' => $product]);
    }

    /**
     * Search for resources.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->input('product');
        $products = Product::where('name', 'like', "$search%")->get();
        foreach($products as $product){
            $product->images = $product->images;
        }
        return response()->json(['success' => true, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoreProduct  $storeProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreProduct $storeProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\storeProductUpdate  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storeProductUpdate $request, $id)
    {
        $product_update = $request->validated();
        $product = StoreProduct::find($id);
        $product->fill($product_update);
        $product->save();

        return response()->json(["success" => true, "message" => "Product updated successfully", "product" => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreProduct  $storeProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreProduct $storeProduct)
    {
        //
    }
}
