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
 Route::bind('librooo',function($id){
 	return App\Librooo::where('id_libro',$id)->first();
 });
Route::get('/', [
	'as'=>'home',
	'uses'=>'StoreController@index']);
Route::get('librooo/{id_libro}',[
		'as'=>'libro-deta',
	'uses' =>'StoreController@show']);
//Carrito-------------
Route::get('cart/show',[
	'as' => 'cart-show',
	'uses'=>'CartController@show'
	]);
//Agregar item al carro
Route::get('cart/add/{librooo}',[
'as'=> 'cart-add',
'uses'=> 'CartController@add'
	]);
Route::get('cart/delete/{librooo}',[
'as'=>'cart-delete',
'uses'=>'CartController@delete'
	]);
Route::get('cart/trash/',[
'as'=>'cart-trash',
'uses'=>'CartController@trash'
	]);