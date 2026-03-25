<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class paginacontroller extends Controller
{
    public function inicio(){
        return View ('index');
    }
     public function comofunciona(){
        return View ('pages.como-funciona');
    }
     public function nosotros(){
        return View ('pages.nosotros');
    }
}
 ##Creación de funciones para controlar las vistas