<?php

namespace App\Http\Controllers;
use App\models\pqrs;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class pqrscontroller extends Controller
{
    public function tienda(Request $request){
        $request->validate([
            'nombre'=> 'required |string| max:100',
        ]);

    }
    //
}
