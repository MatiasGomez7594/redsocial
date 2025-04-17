<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Publicacion;
use Illuminate\Support\Facades\Auth;


class FeedPublicaciones extends Component
{

    public $publicaciones;

    public function mount()
    {
        $usuario = Auth::user();
    
        // Opción limpia: usando la colección ya cargada
        $seguidosIds = $usuario->seguidos->pluck('id');
    
        // Agregamos también el ID del usuario actual
        $idsUsuarios = $seguidosIds->push($usuario->id);
    
        // Obtenemos las publicaciones
        $this->publicaciones = Publicacion::with(['usuario', 'imgs'])
            ->whereIn('id_usuario', $idsUsuarios)
            ->orderBy('created_at', 'desc')
            ->get();
    }
    

}


