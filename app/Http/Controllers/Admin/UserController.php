<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostUpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('is_seller',0)->get();
        return view('admin.manage.users.list',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $user = User::where('id',$id)->first();
        return view('admin.manage.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id); 

        if($request->phone && $request->email){
            $request->validate([
                'user_name' => 'bail|min:8|unique:user,user_name,'.$user->id, 
                'email' => 'bail|email|unique:user,email,'.$user->id,
                'phone' => 'bail|numeric|unique:user,phone,'.$user->id,
            ]);  
        }
        if($request->phone){
            $request->validate([
                'user_name' => 'bail|min:8|unique:user,user_name,'.$user->id, 
                'phone' => 'bail|numeric|unique:user,phone,'.$user->id,
            ]); 
        }
        if($request->email){
            $request->validate([
                'user_name' => 'bail|min:8|unique:user,user_name,'.$user->id, 
                'phone' => 'bail|numeric|unique:user,email,'.$user->id,
            ]); 
        }
        
        if(!empty($user->image)){
            File::delete(public_path($user->image));
        }

        if(empty($request->image_default)){
            $image_user = null;
        }
        else if($request->file('image')){
       
            $image = $request->file('image');
            $seller_image = $image->getClientOriginalName();
            $destinationPath = public_path('/backend/images/users/');
            $image->move($destinationPath,$seller_image);

            $image_user = '/backend/images/users/'.$seller_image;
        }

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_name' => $request->user_name,
            'image' => $image_user,
        ]);
        return redirect()->route('user.edit',$id)->with('success', 'Cập nhật thành công');
    }

    public function postUserPassword(Request $request, $id){
        $user = User::find($id);

        $request->validate([
            'password' => 'min:8',
            'repassword' => 'bail|same:password',
        ]); 

        $user->update(['password' => Hash::make($request->password)]);

        return redirect()->route('user.edit',$id)->with('success','Đổi mật khẩu thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->update([
            'is_active' => $user->is_active == 1 ? 0 : 1
        ]);
        return redirect()->route('user.index')->with('success', 'Đổi trạng thái thành công');
    }
}
