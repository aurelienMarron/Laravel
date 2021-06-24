<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipeController;
use Illuminate\Support\Facades\DB;
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


Route::get('/cart',[CartController::class,'cart']);

Route::get('/contact', [contactController::class,'afficheContact']);


Route::get('/equipe', [EquipeController::class, 'equiPe']);

Route::get('/product', [ProductController::class,'listeProduit']);
