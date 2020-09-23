<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\Auto;

class PageController extends Controller
{
    public function inicio(){
        $autos = Auto::all();
        return view('modelos', compact('autos'));
    }

    public function fichaModelo($idAuto = 0){

        if($idAuto < 1){
            $autos = Auto::all();
            return view('home', compact('autos'));
        }else{
            $auto = Auto::findOrFail($idAuto);
            $direccion = public_path('img\caracteristicas');
            $imagenesDefault = File::files('img/caracteristicas');

            return view('fichaModelo', ['auto'=>$auto, 'imagenesDefault'=>$imagenesDefault]);
        }

    }
}
