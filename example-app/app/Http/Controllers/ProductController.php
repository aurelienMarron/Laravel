<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

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

public function listeProduitParNom(){
        $products= Product::orderBy('name')
        ->get();
        return view('listeProduitParNom',['listeProduit'=>$products]);
}

    public function listeProduitParPrixCroissant(){
        $products= Product::orderBy('price')
            ->get();
        return view('listeProduitParNom',['listeProduit'=>$products]);
    }

    public function infoProduitModel(Product $product){
        return view('infoProduitModel',
            ['product'=>$product]);
    }

}
