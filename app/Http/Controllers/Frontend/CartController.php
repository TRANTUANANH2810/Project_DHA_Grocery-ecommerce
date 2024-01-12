<?php

namespace App\Http\Controllers\Frontend;
use App\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Session;

class CartController extends Controller
{
    //
    // public function index(Cart $cart) {
    //     dd($cart->list());
    // }
    // public function add(Request $request){
    //     dd($request->all());
    // }

    
    public function AddCart(Request $req, $id){
        $product = product::where('id',$id)->first();
        if($product != null){
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldcart);
            $newCart->AddCart($product, $id);

            $req->session()->put('Cart', $newCart);
            }
            return view('frontend.pages.cart');
        }

        
    public function DeleteItemCart(Request $req, $id){
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldcart);
        $newCart->DeleteItemCart($id);

        if(Count($newCart->products) > 0){
            $req->Session()->put('Cart', $newCart);
        }
        else{
            $req->Session()->forget('Cart');
        }
            return view('frontend.pages.cart');
        }

        public function ViewListCart(){
            return view('frontend.pages.checkout');
        }

              
    public function DeleteListItemCart(Request $req, $id){
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldcart);
        $newCart->DeleteItemCart($id);

        if(Count($newCart->products) > 0){
            $req->Session()->put('Cart', $newCart);
        }
        else{
            $req->Session()->forget('Cart');
        }
            return view('frontend.pages.list-cart');
        }


        public function SaveListItemCart(Request $req, $id, $quanty){
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldcart);
            $newCart->UpdateItemCart($id, $quanty);

            $req->Session()->put('Cart', $newCart);
            return view('frontend.pages.list-cart');
        }
        
}
