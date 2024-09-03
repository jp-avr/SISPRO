<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ConfiguracoesController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $roles = Role::all();
        return view('configuracoes.usuarios.index',compact('usuarios','roles'));
    }

    public function destroy($user_id)
    {
        User::destroyUser($user_id);
        return redirect()->route('listar');
    }
}