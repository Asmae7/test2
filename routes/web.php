<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get("/home",function(){echo "Bonjour laravel";});
// Route::view('/accueil','accueil');
// Route::get('/accueil',function (){return view('accueil');})->name('accueil2');
// Route::view('/test2','test');
// //Route::get('/test',[TestController::class, 'index']);

// Route::get('/test','App\Http\Controllers\TestController@index');
// Route::get('/test1','App\Http\Controllers\TestController@show');
// Route::get('/index','App\Http\Controllers\TestController@index');
// Route::get('/home/{nom}',function($nom){
//  return "bonjour".$nom;
// });
// Route::get('/home1/{nom}/{age?}',function($nom,$age=20){
//     return "bonjour".$nom ."votre age est".$age;
//    });
//    Route::get('/home1/{nom}/{age}',function($nom,$age){
//     return "bonjour".$nom ."votre age est".$age;
//    });
//    Route::get('/afficher/{nom}/{age}', 'App\Http\Controllers\TestController@afficher');
//    //on ecrit un invoke_controller si on na seulemet une seul action (une seul methode)
//    Route::get("/oneAction",'App\Http\Controllers\invokeC');
//    Route::resource("/MaRessource", 'App\Http\Controllers\RousseourceController');
//    Route::get("/age/{age}",function(){return view("accueil");})->middleware('Filterage');



// Route::get('/contact/{nom}',function(){
//       return view('contact');
//                               })->middleware('user');
// Route::middleware(['Filterage','user'])->
// group(function(){
//     Route::get('/age/{age}',function(){return view("accueil");});
    
// }) ;
//  Route::get('/t', function () {
//     $nom = request('nom', 'Default Name');  
//     $age = request('age', 'Default Age');  
//     return view('t', compact('nom', 'age'));
// }); 


// Route::get('/test/{nom}/{age}',function(){return view('test');})->middleware('test');
// Route::get('calcul/{nbrCopie}','App\Http\Controllers\GestionController@calcul');
// Route::get('/moyene/{nom}/{moy}','App\Http\Controllers\GestionController@Moyenne');
// //Route::get('/testCoponnte','App\Http\Controllers\TestController@indexe');
// Route::get('/notes','App\Http\Controllers\GestionController@notes');
// // vier template
//    Route::get('/pages', function(){return view('pages.home');});
// //Route::get('/contact', function(){return view('pages.contacte');});
// Route::get('/contact', 'App\Http\Controllers\TestController@indexe');
//    Route::get('/produit', function(){return view('pages.produit');});










