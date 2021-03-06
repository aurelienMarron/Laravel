<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\BackofficeProductController;
use App\Http\Controllers\BackofficeCategorieController;
use App\Http\Controllers\BackofficeOrderController;
use App\Http\Controllers\BackofficeCustomerController;
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


Route::get('/cart',[CartController::class,'cart'])->name('panier');

Route::get('/contact', [contactController::class,'afficheContact']);


Route::get('/equipe', [EquipeController::class, 'equiPe']);

Route::get('/product', [ProductController::class,'listeProduit']);

Route::get('/listeProduitParNom', [ProductController::class,'listeProduitParNom']);

Route::get('/listeProduitParPrixCroissant', [ProductController::class,'listeProduitParPrixCroissant']);

Route::get('/infoProduitModel/{product}', [ProductController::class,'infoProduitModel'])->name('product_show');

Route::resource('backoffice/indexproduct',BackofficeProductController::class);

Route::resource('backoffice/indexcategorie',BackofficeCategorieController::class);

Route::resource('backoffice/indexorder',BackofficeOrderController::class);

Route::resource('backoffice/indexcustomer',BackofficeCustomerController::class);

Route::get('/cart/{product}',[CartController::class,'add'])->name('cart.add');
