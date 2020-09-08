<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Producto extends Model
{

    protected $fillable =[
    	'nombre',
        'descripcion',
        'id_tipo'
    ];


}
