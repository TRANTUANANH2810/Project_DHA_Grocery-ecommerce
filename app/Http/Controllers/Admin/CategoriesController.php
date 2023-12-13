<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cate = Category::get();
        return view('admin.categories.list',compact('cate'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create($request->all()); 
        return redirect()->route('category.index')->with('success', 'Thêm mới thành công');;
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
        $cate = Category::find($id);
        return view('admin.categories.edit',compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $data['is_active'] = $request->is_active ? 1 : 0;
        $cate = Category::find($id);
        $cate->update($data);
        return redirect()->route('category.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cate = Category::find($id);
        $cate->delete(); 
        return redirect()->route('category.index')->with('success', 'Xóa thành công');
    }
}