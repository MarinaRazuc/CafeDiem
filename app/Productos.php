<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
	// protected $table = 'productos';

	protected $fillable = ['nombre', 'idCategoria', 'precio','imagen','x','y','h','w'];

}
