<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/producto', function() {
    //return view('almacen.producto', ['nombre' => 'Play station 7', 'marca' => 'Sonyc']);
    //return view('almacen.producto') -> with(['nombre' => 'Lamborghini F300', 'marca' => 'Lamborghini']);
    $nombre = "Impresora LX3000";
    $marca = "EPSON";
    return view('almacen.producto', compact('nombre', 'marca'));

});

Route::get('/basededatos', function() {
    return env('DB_PASSWORD');
});

Route::get('/dd', function() {
    $nombre= "Jose Caicedo";
    dd($nombre);
});

Route::get('/condicional/{nota}', function($nota) {
    return view ('estructuras.condicional', compact('nota'));
});

Route::get('/switch/{numero}', function($numero) {
    return view ('estructuras.switch', compact('numero'));
});

Route::get( 'foreach' , function () {
    $lista= ["Manzana", "Pera", "Uvas", "Mandarina"];
    return view ('estructuras.foreach', compact('lista'));
});

Route::get( 'while' , function () {
    $numero=10;
    return view ('estructuras.while', compact('numero'));
});

Route::get('categoria', function() {
    return view ('categoria');
});
Route::get('contacto', function() {
    return view ('contacto');
});



Route::get('/hola', function() {
    $nombre = "Jose Javier";
    return "hola mundo desde laravel 12 {$nombre}";
});

Route::get('/usuario/{nombre?}', function ($nombre = 'Default') {
    return "Usuario: $nombre";
});

