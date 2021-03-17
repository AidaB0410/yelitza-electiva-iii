<?php

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
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carrito', 'ShoppingController@cart')->name('cart');
Route::get('/productos', 'ShoppingController@products')->name('products');
Route::get('/pagar', 'ShoppingController@checkout')->name('checkout');
Route::post('/pagar/factura', 'ShoppingController@checkoutStore')->name('checkoutStore');



Route::middleware(['auth'])->group(function(){

Route::get("/dashboard", 'AdminController@index')->name('admin');
Route::get("/dashboard/productos", 'AdminController@products')->name('adminProducts');
Route::get("/dashboard/ventas", 'AdminController@cart')->name('adminCart');
Route::get("/dashboard/productos/crear", 'AdminController@newProduct')->name('newProduct');
Route::get("/dashboard/ventas/show/{id}", 'AdminController@showVentas')->name('showVentas');

Route::post("/dashboard/productos/guardar", 'AdminController@productStore')->name('storeProduct');

});