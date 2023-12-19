<?php

namespace App\Http\Controllers\Admin\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
            $seller_image = $image->getClientOriginalName();
            $destinationPath = public_path('/backend/images/products/');
            $image->move($destinationPath,$seller_image);

            $data['image'] = '/backend/images/products/'.$seller_image;
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
        $category = Category::all();
        $product = Product::where('id',$id)->with('category')->first();
        return view('admin.seller.product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $data = $request->all();
        $product = Product::find($id);

        if(!empty($product->image)){
            File::delete(public_path($product->image));
        }

        if(empty($request->image_default)){
            $data['image']  = null;
        }
        else if($request->file('image')){
       
            $image = $request->file('image');
            $seller_image = $image->getClientOriginalName();
            $destinationPath = public_path('/backend/images/products/');
            $image->move($destinationPath,$seller_image);

            $data['image']  = '/backend/images/products/'.$seller_image;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if(!empty($product->image)){
            File::delete(public_path($product->image));
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Xóa sản phẩm thành công');
    }
}
