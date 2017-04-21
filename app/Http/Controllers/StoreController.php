<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librooo;
class StoreController extends Controller
{//Se ejecutara en el incio de la pagina para mostrar todos los libros disponibles
	public function index(){
    $libros= Librooo::all();
    //dd($libros);
    return view('store.index',compact('libros'));
    }
    //Se ejecutara el metodo show para mostrar en otra pagina el libro seleccionado
    public function show($id){
        $resultado=librooo::where('id_libro',$id)->first();
        //dd($resultado);
    return view('store.show',compact('resultado'));
    }
}
