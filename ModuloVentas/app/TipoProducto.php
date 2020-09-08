<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class TipoProducto extends Model
{

    protected $fillable =[
    	'nombre'
    ];
}
