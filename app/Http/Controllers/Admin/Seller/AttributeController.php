<?php

namespace App\Http\Controllers\Admin\Seller;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Seller;
use Illuminate\Support\Facades\Auth;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seller = Seller::where('user_id', Auth::user()->id)->first();
        $attr = Attribute::where('seller_id', $seller->id)->orWhere('seller_id', null)->get();
        return view('admin.seller.attribute.list',compact('attr'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.seller.attribute.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $seller = Seller::where('user_id', Auth::user()->id)->first();
        $data['seller_id'] = $seller->id;

        Attribute::create($data); 
        return redirect()->route('attribute.index')->with('success', 'Thêm mới thành công');;
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
    public function edit($id)
    {
        $attr = Attribute::find($id);
        return view('admin.seller.attribute.edit',compact('attr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
      
        $data = $request->all();
        $data['is_active'] = $request->is_active ? 1 : 0;

        $attr = Attribute::find($id);

        $attr->update($data);
        return redirect()->route('attribute.edit',$id)->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $attr = Attribute::find($id);
        if(!empty($attr->attributeValue->id)){
            return redirect()->route('attribute.index')->with('error', 'Danh mục đang tồn tại sản phẩm');
        }
        $attr->delete(); 
        return redirect()->route('attribute.index')->with('success', 'Xóa thành công');
    }

    public function fetchDataAttribute($categoryId, $productId)
    {
        $data = Attribute::where('category_id', $categoryId)->get();
        if ($productId == 'NULL') {
            return view('admin.seller.product.attribute', compact('data'));
        } else {
            if ($data) {
                foreach ($data as &$attribute) {
                    $dataValue = AttributeValue::where('product_id', $productId)->where('attribute_id', $attribute->id)->first();
                    if ($dataValue) {
                        $attribute->values = $dataValue->value;
                    }
                }
            }
            return view('admin.seller.product.attribute', compact('data'));
        }
    }
}
