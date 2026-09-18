<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        error_log($request);

        $validated = $request->validate([
            'nombre' => 'nullable|string',
            'email' => 'nullable|email',
            'sig_id' => 'required|integer',
            'sig_usuario' => 'required|string',
            'responsabilidad_id' => 'required|integer',
        ]);
            
        $usuario = Usuario::updateOrCreate(
            [
                'sig_id' => $validated['sig_id'],
            ],
            [
                'nombre' => $validated['nombre'],
                'email' => $validated['email'],
                'sig_usuario' => $validated['sig_usuario'],
                'responsabilidad_id' => $validated['responsabilidad_id'],
            ]
        );

        return response()->json([
            'success' => true,
            'usuario' => $usuario,
        ]);
    }

    public function update(Request $request, Usuario $usuario)
    {
        error_log($usuario);
        
        $validated = $request->validate([
            'nombre' => 'nullable|string',
            'email' => 'nullable|email',
            'telefono' => 'nullable|string',
            'sig_usuario' => 'nullable|string',
            'sig_id' => 'nullable|integer',
            'responsabilidad_id' => 'nullable|integer',
        ]);
            
        $validated['popup_nuevo'] = false;
        $usuario->update($validated);

        return response()->json([
            'success' => true,
            'usuario' => $usuario,
        ]);
    }
}