<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function listeProduit(){
        return view('product-list');
    }


    public function infoProduit($id){
        return view('infoProduit',
        ['cleproduit'=>$id]);
    }

}
