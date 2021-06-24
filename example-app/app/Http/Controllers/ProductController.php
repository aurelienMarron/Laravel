<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listeProduit(){

        $products=DB::select('SELECT * FROM products');

        return view('listeProduitBDD',['listeProduit'=>$products]);}



    public function infoProduit($id){
        $product=DB::select('SELECT * FROM products WHERE id=?',[$id]);

        return view('infoProduit',
        ['produit'=>$product[0]]);
    }

}
