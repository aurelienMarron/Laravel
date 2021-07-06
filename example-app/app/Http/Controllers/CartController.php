<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart(Request $request){
        $session = $request->session()->get('panier') ?? [];
        $data = [];

        $i=0;
        foreach ($session as $product_id => $quantity){
            $data [$i]['produit'] = Product::find($product_id);
            $data [$i]['quantity'] = $quantity;
            $i++;
        }

        return view('/cart', ['data' => $data]);
    }

    public function add(Product $product, Request $request){
        $data=[];
        $data[$product->id]=$request->get('quantity');
        if ($request->session()->has('panier'))
        {
            $data += $request->session()->get('panier');
        }
        $request->session()->put('panier', $data);

        return redirect()->route('product_show', $product->id)->withMessage('Produit ajouté au panier');
    }
}
