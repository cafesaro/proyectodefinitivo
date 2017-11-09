<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dibujo extends Model
{
	protected $table = "dibujo";
	public $fillable = ['img','nombre','alto','ancho','categoria_id'];
    
}
