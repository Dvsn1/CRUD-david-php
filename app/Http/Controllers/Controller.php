<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Controller extends Controller
{
    public function criarToken(Request $request)
    {
        $user = $request->user();
        $token = $user->createToken('Token de Acesso')->plainTextToken;

        return response()->json(['token' => $token]);
    }
}

Route::post('http://127.0.0.1:8000/criar-token', [Controller::class, 'criarToken']);
