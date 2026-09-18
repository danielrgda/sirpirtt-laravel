<?php

use App\Models\Auth\Usuario;
use App\Models\Geo\Estado;
use App\Models\Geo\Municipio;
use App\Models\Geo\Localidad;
use App\Models\Geo\Asentamiento;
use App\Models\Geo\Lote;

use App\Http\Controllers\Auth\UsuarioController;
use Illuminate\Support\Facades\Route;

// GEO
Route::get('/geo/estados', function () {
    return Estado::all();
});
Route::get('/geo/estados/{id}', function ($id) {
    return Estado::findOrFail($id);
});
Route::get('/geo/municipios', function () {
    return Municipio::all();
});
Route::get('/geo/municipios/{id}', function ($id) {
    return Municipio::findOrFail($id);
});
    

// USUARIOS
Route::get('/auth/usuarios', function () {
    return Usuario::all();
});
Route::get('/auth/usuarios/{id}', function ($id) {
    return Usuario::findOrFail($id);
});
Route::post('/auth/usuarios', [UsuarioController::class, 'store']);
Route::put('/auth/usuarios/{usuario}', [UsuarioController::class, 'update']);