<?php

use App\Models\Contacto;
use Illuminate\Http\Request;
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
Route::get('/', function(){
    return view('juegos.index');
});
Route::get('contacto', function (){
    return view('layout.create');
});
Route::post('contacto', function(Request $request){
    $contacto = new Contacto();
    $contacto->numero = $request->numero;
    $contacto->save();
    return view('juegos.index');
});

