<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;

class RespuestasComentario extends Component
{
    public $publicacion;
    public $comentario;

    public $respuestaNueva = '';

    protected $rules = [
        'respuestaNueva' => 'required|string|max:1000',
    ];

    public function enviarRespuesta()
    {
        $this->validate();

        Comentario::create([
            'id_usuario'     => Auth::id(),
            'id_publicacion' => $this->publicacion->id,
            'id_padre' => $this->comentario->id,
            'contenido'      => $this->respuestaNueva,
        ]);

        // Limpia el textarea
        $this->respuestaNueva = '';

        // Refresca los comentarios
        $this->publicacion->load('comentarios.respuestas.usuario');
    }

    public function render()
    {
        return view('livewire.respuestas-comentario');
    }
}
