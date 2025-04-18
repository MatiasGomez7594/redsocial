<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Publicacion;
use App\Models\ImgsPublicacion;

use Illuminate\Support\Facades\Auth;
#[On('publicacionCreada')] // Esta línea escucha el evento emitido desde NuevaPublicacion



class FeedPublicaciones extends Component
{

    public $publicaciones;

    public function cargarPublicaciones()
    {
    $usuario = Auth::user();
    $seguidosIds = $usuario->seguidos->pluck('id');
    $idsUsuarios = $seguidosIds->push($usuario->id);

    $this->publicaciones = Publicacion::with([
        'usuario', 
        'imgs', 
        'comentarios.usuario', 
        'comentarios.respuestas.usuario'
    ])
    ->whereIn('id_usuario', $idsUsuarios)
    ->orderBy('created_at', 'desc')
    ->get();
    }

    public function mount()
    {
        $this->cargarPublicaciones();
        
    }

    protected $listeners = ['publicacionCreada' => 'agregarPublicacion'];

    public function agregarPublicacion($publicacionId)
    {
        $nuevaPublicacion = Publicacion::with([
            'usuario', 
            'imgs', 
            'comentarios.usuario',         
            'comentarios.respuestas.usuario'
        ])->find($publicacionId);

        if ($nuevaPublicacion) {
            $this->publicaciones->prepend($nuevaPublicacion);
        }
    }

    public function render()
    {
        $this->mount();
        return view('livewire.feed-publicaciones');
    }
    

}




