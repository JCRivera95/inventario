<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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

/* 
 Route resource for products
*/
Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'index');
    Route::get('/product/{id}', 'show');
    Route::post('/product/store', 'store');
    Route::get('/product/create', 'create');
    Route::get('/product/{id}/edit', 'edit');
    Route::put('/product/{id}/update', 'update');
    Route::delete('/product/{id}/delete', 'delete');
});
