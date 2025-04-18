<?php 
namespace App\Livewire;

use Livewire\Component;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;

class ComentariosPublicacion extends Component
{
    public $publicacion;
    public $comentarioNuevo = '';

    protected $rules = [
        'comentarioNuevo' => 'required|string|max:1000',
    ];

    public function enviarComentario()
    {
        $this->validate();

        Comentario::create([
            'id_usuario'     => Auth::id(),
            'id_publicacion' => $this->publicacion->id,
            'contenido'      => $this->comentarioNuevo,
        ]);

        // Limpia el textarea
        $this->comentarioNuevo = '';

        // Refresca los comentarios
        $this->publicacion->load('comentarios.usuario');
    }

    public function render()
    {
        return view('livewire.comentarios-publicacion');
    }
}
