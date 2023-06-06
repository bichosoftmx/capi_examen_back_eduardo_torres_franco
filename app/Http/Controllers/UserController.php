<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Direccion;


class UserController extends Controller
{
    
    public function getIndex() {

        $direccion = Direccion::all()->load('user');
    	return response()->json(array(
    			'direccion' => $direccion,
    			'status' => 'success'
    		), 200);
        
    }
}
