<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function crearArxiu(){
        
        Storage::disk('public')->put('arxiu.xml');
        $fitxer = Storage::get('arxiu.xml');
        return $fitxer;

    }
    public function carregaFitxer(Request $request){

        $nomFitxer = $request->file('arxiu')->getClientOriginalName();
        $request->file('arxiu')->storeAs('fitxers' , $nomFitxer, 'public');

   }
    
}
