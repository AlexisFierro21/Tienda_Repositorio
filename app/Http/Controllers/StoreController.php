<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librooo;
class StoreController extends Controller
{//Se ejecutara en el incio de la pagina para mostrar todos los libros disponibles
	public function index(){
    $libros= Librooo::all();
    $cart=\Session::get('cart');
    $cantidad=0;
    foreach ($cart as $item) {
        $cantidad ++;
    }
    return view('store.index',compact('libros','cantidad'));
    }
    //Se ejecutara el metodo show para mostrar en otra pagina el libro seleccionado
    public function show($id){
        $resultado=librooo::where('id',$id)->first();
        //dd($resultado);
            $cart=\Session::get('cart');
    $cantidad=0;
    foreach ($cart as $item) {
        $cantidad ++;
    }
    return view('store.show',compact('resultado','cantidad'));
    }

}
