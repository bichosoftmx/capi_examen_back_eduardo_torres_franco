<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'user_domicilio';

    // Relación
    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
