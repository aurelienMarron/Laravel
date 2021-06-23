<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function listeProduit(){
        return view('listeProduit');
    }


    public function infoProduit($id){
        return view('infoProduit',
        ['cleproduit'=>$id]);
    }

}
