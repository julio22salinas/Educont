<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
    public function inicio(){
        //Trayendo datos de la tabla notas usando modelos
        //Metodo que trae todo
        $notas=App\Nota::all();
        return view('welcome', compact('notas'));
    }

    /*public function fotos(){
        return view('fotos');
    }

    public function nosotros($nombre = null){
        $equipo = ['Julio', 'Estefannia','Eliana'];
        return view('nosotros', compact('equipo','nombre'));
    }
                            
    public function blog(){
        return view('blog');
    }*/

   
}
