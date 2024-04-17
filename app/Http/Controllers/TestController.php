<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /* public function index(){
        return 'Je suis le contrôleur TestController';
    }
   
    public function oneMethode(){
        return view('accueil');

    }
    public function afficher(Request $request)
        {
            return view('afficher', ['nom' =>$request->nom, 'age' =>$request->age]);
        }
     */
    public function indexe(Request $request){
        $users=[
            ['id'=>'1',"nom"=>"lamiae",'metier'=>'devloêur'],
        ['id'=>'2',"nom"=>"alami",'metier'=>'coifeur']];
        return view('pages.home',compact('users'));
        
       
    }
}
