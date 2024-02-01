<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function changePassword(Request $request)
    {
        $user = $request->user();

        // Validação dos dados recebidos
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Atualizar a senha do usuário
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()->json(['message' => 'Senha alterada com sucesso']);
    }
}
