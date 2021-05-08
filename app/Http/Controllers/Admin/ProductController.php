<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\ProductPost;
use App\Http\Requests\ProductUpdate;

use App\Models\Admin;
use App\Models\Product;
use App\Models\SiteInfo;
use App\Models\ProductImage;


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
                  "customers" => ["name" => "customers", "icon" => "flaticon-users"],
                  "reports"   => ["name" => "reports",   "icon" => "flaticon2-graph"],
                  "profile"   => ["name" => "profile",   "icon" => "flaticon-user"],
                  "settings"  => ["name" => "settings",  "icon" => "flaticon2-settings"]];

    public $site_info = "";

    public function __construct(){
        $this->middleware('admin');
        $this->site_info = SiteInfo::first();
    }


    public function index()
    {
        //
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $products = Product::orderBy('id', 'desc')->paginate(20);
        //$min_price = DB::table('products')->min('price');
        //$max_price = DB::table('products')->max('price');

        return view('admin.products.index', ['title' => 'products', 'pages' => $this->pages, 'admin' => $admin, 'site_info' => $this->site_info, 'products' => $products]);

        //return view('admin.products.index', ['title' => 'products', 'pages' => $this->pages, 'admin' => $admin, 'site_info' => $this->site_info, 'products' => $products, 'min_price' => $min_price, 'max_price' => $max_price]);
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
     * @param  \App\Http\Requests\ProductPost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductPost $request)
    {
        $new_product = $request->validated();
        $new_product['colors'] = explode(",", $new_product['colors']);
        if (in_array('sizes', $new_product)){
            $new_product['sizes'] = $new_product['sizes'];
        }

        $product = Product::create($new_product);
        if ($request->hasFile('thumbnail')){
            $thumbnail = $request->thumbnail->store("public");
            ProductImage::create([
                "product_id" => $product->id,
                "name" => explode("/", $thumbnail)[1],
                "fullpath" => $thumbnail
            ]);
        }

        if ($request->hasFile('images')){
            $images = $request->images;
            foreach ($images as $imageFile){
                $image = $imageFile->store("public");
                ProductImage::create([
                    "product_id" => $product->id,
                    "name" => explode("/", $image)[1],
                    "fullpath" => $image
                ]);
            }
        }
        //$product->images = $product->images;
        return response()->json(["success" => true, "message" => "Product added successfully", "product" => $product, "title" => "Add Product"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //
        if ($request->has('_method') && $request->input('_method') == 'delete'){
            $product = Product::find($id);
            if ($product->images){
                foreach ($product->images as $image){
                    Storage::delete($image->fullpath);
                    $image->delete();
                }
            }
            Product::destroy($id);
            return response()->json(["success" => true, "message" => "Product deleted successfully", "product" => $product]);
        }
        $product = Product::find($id);
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
        $product->fill($product_update);
        $product->save();
        if ($request->hasFile('thumbnail')){
            $thumbnail = $request->thumbnail->store("public");
            ProductImage::create([
                "product_id" => $product->id,
                "name" => explode("/", $thumbnail)[1]
            ]);
            OptimizeImage::dispatch($request->thumbnail);
        }

        if ($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $imageFile){
                $image = $imageFile->store("public");
                ProductImage::create([
                    "product_id" => $product->id,
                    "name" => explode("/", $image)[1]
                ]);
                OptimizeImage::dispatch($imageFile);
            }
        }
        $product->images = $product->images;
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
        $product = Product::find($id);
        if ($product->images){
            foreach ($product->images as $image){
                Storage::delete($image->name);
                $image->delete();
            }
        }
        Product::destroy($id);
        return response()->json(["success" => true, "message" => "Product deleted successfully", "product" => $product]);
    }
}
