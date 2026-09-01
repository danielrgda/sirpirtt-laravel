<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'nullable|string',
            'apellidos' => 'nullable|string',
            'email' => 'nullable|email',
            'telefono' => 'nullable|string',
            'sig_id' => 'required|integer',
        ]);
        $usuario = Usuario::create($data);

        return response()->json($usuario, 201);
    }
}