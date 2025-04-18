<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsuarioController extends Controller
{

    public function verUsuario($id)
    {
        $usuario = User::with('publicaciones')->findOrFail($id);
        
       // $usuario->load('publicaciones.imgs');        
        return view('usuario', compact('usuario'));
    }
    
    public function miPerfil()
    {
        $usuario = auth()->user()->load('publicaciones.imgs'); // Trae publicaciones e imágenes asociadas
        return view('mi-perfil', compact('usuario'));
    }
    

}
