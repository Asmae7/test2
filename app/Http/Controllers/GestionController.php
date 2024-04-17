<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function calcul($nbrcopie){
        if(view()->exists('calcul')){
            return view('calcul',['nbrcopie' => $nbrcopie]);
            
        }
        else {
            abort(403);
        }
       
    }
    public  function Moyenne($nom,$moy){
        if(view()->exists('Moyenne')){
            return view('Moyenne')->with('nom',$nom)->with('moy',$moy);
        }
        else {
            abort(403);
        }

    }
    public function notes(){
        $etudiants = [
            ['nom' => 'Ahmed', 'note' => 15],
            ['nom' => 'Mohamed', 'note' => 9],
            ['nom' => 'Khadija', 'note' => 12],
            ['nom' => 'Adam', 'note' => 18],
        ];
        return view('notes',compact('etudiants'));
         


    }
}
