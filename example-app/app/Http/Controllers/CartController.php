<?php


namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order_product;

class CartController extends Controller
{


    public function cart(Order_product $order){
        return view('cart',
            ['order'=>$order]);
    }
}
