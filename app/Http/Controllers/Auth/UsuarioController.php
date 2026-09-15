<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\Usuario;
use Illuminate\Http\Request;

class UsuarioController
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'sig_usuario' => 'required|string',
            'nombre' => 'required|string',
            'email' => 'nullable|email',
            'responsabilidad_id' => 'required|integer',
            'id_usuario' => 'required|integer',
        ]);

        $usuario = Usuario::updateOrCreate(
            [
                'sig_id' => $validated['id_usuario'],
            ],
            [
                'nombre' => $validated['nombre'],
                'usuario_sig' => $validated['sig_usuario'],
                'email' => $validated['email'],
                'responsabilidad_id' => $validated['responsabilidad_id'],
            ]
        );

        return response()->json([
            'success' => true,
            'usuario' => $usuario,
        ]);
    }
}