<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function listeProduit(){
        return 'Liste des produits';
    }


    public function infoProduit($id){
        return 'Fiche du produit' . $id;
    }

}
