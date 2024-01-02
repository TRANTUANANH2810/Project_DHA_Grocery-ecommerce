<?php
namespace App\Helpers;
class Cart
{
    private $items =[];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct(){
        $this->items = session('cart') ? session('cart') : [];

    }


    //phương thức lấy về danh sách trong giỏ
    public function list(){
        return $this->items;
    }
    //thêm mới giỏ hàng
    public function add($product, $quantity = 1){
        $item = [
            'productID'=>$product->id,
            'price'=>$product->sale_price > 0 ? $product->sale_price : $product->price,
            'image'=>$product->image,
            'quantity'=>$quantity
        ];
        session(['cart'=>$item]);
    }
    //cập nhập giỏ hàng

    // xóa sản phẩm khỏi giỏ hàng

    //xóa hết sản phẩm khỏi giỏ hàng
}