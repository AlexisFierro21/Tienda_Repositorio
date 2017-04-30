<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Librooo;
use App\subioo;
use App\Editoriaal;
class CartController extends Controller
{
	public function __construct()
	{
		if(!\Session::has('cart')) \Session::put('cart',array());
		//$cantidad=0;
	}
    //show cart
public function show()
{
	$cart = \Session::get('cart');
	$total=$this->total();
	    $cart=\Session::get('cart');
    $cantidad=0;
    foreach ($cart as $item) {
        $cantidad ++;
    }
	return view('store.cart',compact('cart','total','cantidad')); 	
}
    //add item
public function add(Librooo $libro)
{
	$cart = \Session::get('cart');
	//$cantidad= $cantidad+1;
	$cart[$libro->id_libro]=$libro;
	\Session::put('cart',$cart);
	return redirect()->route('home');
}

    //delete item
public function delete(Librooo $libro){
	$cart =\Session::get('cart');
	unset($cart[$libro->id_libro]);
	\Session::put('cart',$cart);
	return redirect()->route('cart-show');
}

    //update item

    //trash cart
public function trash()
{
	\Session::forget('cart');
	return redirect()->route('cart-show');
}

    //total cart
private function total(){
	$cart =\Session::get('cart');
	$total=0;
	foreach ($cart as $item) {
		$total +=$item->precio;
	}
	return $total;
}
}
