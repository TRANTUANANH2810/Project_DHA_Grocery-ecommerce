<?php

namespace App\Http\Controllers\Admin\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::where('seller_id',Auth::user()->id)->with('category')->get();
        return view('admin.seller.product.list',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.seller.product.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();

        if(empty($request->image_default)){

            $data['image'] = null;

        }
        else if($request->file('image')){
       
            $image = $request->file('image');
            $customer_image = $image->getClientOriginalName();
            $destinationPath = public_path('/ckfinder/uploads/images/product/');
            $image->move($destinationPath,$customer_image);

            $data['image'] = '/ckfinder/uploads/images/product/'.$customer_image;
        }

        Product::create($data);
    
        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công');

        // $data['slug'] =  SlugService::createSlug(Products::class, 'slug', $request->name);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Xóa sản phẩm thành công');
    }
}
