<?php


namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;


class CartController extends Controller
{


    public function cart(Order $orders){
        return view('ListeCommande',
            ['orders'=>$orders]);
    }
}
