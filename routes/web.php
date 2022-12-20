<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
    return view('Produits/list-produits');
});
//route pour le controlleur resouces
Route::resource('product',productController::class);

Route::get('tous', function () {
    return view('Produits/tamplate');
});

Route::get('ajout', function () {
    return view('Produits/ajout-produit');
});

Route::get('modifier', function () {
    return view('Produits/modifier-produit');
});