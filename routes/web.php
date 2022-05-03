<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//ruta paises

Route::get('paises', function(){
    $paises=["Colombia" => ["capital" => "Bogotá", "moneda" => "peso", "poblacion" => 51.6, "ciudades" =>["medellin" , "cali" , "barranquilla"] ] , "Peru" => ["capital" => "lima", "moneda" => "sol", "poblacion" => 32.97, "ciudades" =>["arequipa" , "cusco" , "piura"]], "Paraguay" => ["capital" => "montevideo", "moneda" => "guarani", "poblacion" => 32.97, "ciudades" =>["asuncion" , "encarnacion" , "pilar"]]];
    
    //echo "<pre>";
    //var_dump($paises);
    //echo "</pre>";

    //Mostrar la vista de paises
    return view("paises")->with("paises", $paises);
});
