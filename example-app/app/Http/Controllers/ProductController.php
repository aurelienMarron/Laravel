<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listeProduit(){

        $products=\DB::select('SELECT * FROM products');

        return view('listeProduitBDD',['listeProduit'=>$products]);}



    public function infoProduit($id){
        return view('infoProduit',
        ['cleproduit'=>$id]);
    }

}
