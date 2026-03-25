<?php

namespace App\Http\Controllers;

use App\Models\pqr;
use App\models\pqrs;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class pqrscontroller extends Controller
{
    public function tienda(Request $request){
        $request->validate([
            'nombres'=> 'required |string| max:100',
             'apellidos'=> 'required |string| max:100',
              'email'=> 'required |email|',
              'tipo'=> 'required |in:queja,peticion,felicitación|',
              'mensaje'=> 'required|string',
              'acepto'=> 'accepted',
        ]);
        pqr::create([
            'nombres'=> $request->nombres,
            'apellidos'=> $request->apellidos,
            'tipo'=> $request->nombres,
            'mensajes'=> $request->mensajes,
            'acepto'=> $request->hash('accepted'),
        ]);

        return redirect()->route('nosotros')->whith('socces','Mensaje enviado correctamente');
    }
    //Actualización
}
