<?php

use Illuminate\Support\Facades\Route;
use App\Models\miClase;

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

/* Practica */
Route::get('/saludo', function () {
    return view('welcome');
});
/* Practica */
// Route::get('/inicio', function () {
//     $nombre = "Alexis";
//     $apellido = "Osorio";
//     $elementos=[1,2,"Hi",true];
//     return view('inicio',['nombre'=>$nombre, 'apellido'=>$apellido, 'elementos'=>$elementos]);
// })->name('inicio');
/* Practica */
// Route::get('/adiosgf', function () {
//     return view('despedida');
// })->name('adioss');

Route::get('/inicio', function () {
    return view('plantilla_blog.index');
})->name('inicio');

Route::get('/habilidad', function () {
    $claseMia=new miClase();
    $claseMia->nombre='Mejia Osorio Roberto Alexis';
    $claseMia->habilidadUno='Programar';
    $claseMia->habilidadDos='Diseñar';
    $claseMia->edad='20 años';
    return view('plantilla_blog.page1', ['claseMia'=>$claseMia]);
})->name('habilidad');

Route::get('/contacto', function () {
    $claseMia=new miClase();
    $claseMia->nombre='Mejia Osorio Roberto Alexis';
    $claseMia->correo='robertoalexismejia@gmail.com';
    $claseMia->telefono='5518188738';
    $claseMia->direccion='Calle 1 #1-1';
    return view('plantilla_blog.Page2', ['claseMia'=>$claseMia]);
})->name('contacto');


