<?php

namespace App\Http\Controllers;

use App\Models\User; // Importa el modelo de usuario
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8'
        ]);

        // Crear el nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // ¡Importante! Encriptar la contraseña
        ]);
        
        // Crear un token de autenticación para el usuario
        $token = $user->createToken('auth_token')->plainTextToken;

        // Devolver una respuesta JSON con el token
        return response()->json([
            'message' => 'Usuario registrado con éxito',
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}