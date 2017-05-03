<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Librooo;
use App\subioo;
use App\Editoriaal;
use App\editoriaal_librooo;
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
	$res=\DB::table('editoriaal_librooo')
	->join('librooos','librooo_id','=','librooos.id')
	->join('Editoriaals','editoriaal_id','=','editoriaals.id')
	->select('librooos.*','editoriaals.nombre')
	->where('librooos.id',$libro->id)
	->get();

	//where('fk_libro',$libro->id_libro)->first();
	$cart[$libro->id]=$res[0];
	\Session::put('cart',$cart);
	//dd($cart);	# code...
	
	//dd($carr);
	return redirect()->route('home');
}

    //delete item
public function delete(Librooo $libro){
	$cart =\Session::get('cart');
	unset($cart[$libro->id]);
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
