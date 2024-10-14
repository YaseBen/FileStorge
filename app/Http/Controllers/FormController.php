<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function crearArxiu(Request $request){

        Storage::disk('public')->put('arxiu.xml');

        $nom=$request->input('Nom');
        $descripcio=$request->input('Descripcio');
        $preu = $request->input('Preu');
        $iva = $request->input('IVA', 21);
        $color = $request->input('Color');
        $talla = $request->input('Talla');

        return redirect('/register')->with('success', 'Formulari enviat correctament!');

    }

    public function carregaFitxer(Request $request){

        $nomFitxer = $request->file('arxiu')->getClientOriginalName();
        $request->file('arxiu')->storeAs('fitxers' , $nomFitxer, 'public');
    }
    
    public function generaArxiuPublic(){
        Storage::disk('public')->put('arxiu.xml');

        return redirect(Storage::url('arxiu.xml'));
    }

    public function generaArxiuLocal(){
        Storage::disk('local')->put('arxiu.json');

        return redirect(Storage::url('arxiu.json'));
    }
    

}
