<?php

use App\Models\Usuario;
use App\Models\Geo\Estado;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/usuarios', function () {
    return Usuario::all();
});

Route::get('/estados', function () {
    return Estado::all();
});
Route::get('/estados/{id}', function ($id) {
    return Estado::findOrFail($id);
});

Route::post('/usuarios', [UsuarioController::class, 'store']);