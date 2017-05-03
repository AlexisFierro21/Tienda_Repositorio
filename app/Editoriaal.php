<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editoriaal extends Model
{
	protected $talbe = "editoriaals";
	protected $fillable =['id','nombre','rfc','code','password']; 
    public function librooos(){
    	return $this->belongsToMany('App\Librooo');
    }
}
