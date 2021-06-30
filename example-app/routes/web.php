<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\BackofficeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'homePage']);


//Route::get('/product', [ProductController::class,'listeProduit']);

Route::get('/product/{id}', [ProductController::class,'infoProduit']);


Route::get('/cart/{order}',[CartController::class,'cart']);

Route::get('/contact', [contactController::class,'afficheContact']);


Route::get('/equipe', [EquipeController::class, 'equiPe']);

Route::get('/product', [ProductController::class,'listeProduit']);

Route::get('/listeProduitParNom', [ProductController::class,'listeProduitParNom']);

Route::get('/listeProduitParPrixCroissant', [ProductController::class,'listeProduitParPrixCroissant']);

Route::get('/infoProduitModel/{product}', [ProductController::class,'infoProduitModel']);

Route::resource('backoffice/indexproduct',BackofficeController::class);



