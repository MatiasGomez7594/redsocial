<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Publicacion;
use Illuminate\Support\Facades\Auth;
//agrego esto para poder subir archivos
use Livewire\WithFileUploads;



class NuevaPublicacion extends Component
{
    public $contenidoPublicacion = '';
    use WithFileUploads;

    public $imgsPublicacion = []; // array porque usamos multiple
    protected $rules = [
        'contenidoPublicacion' => 'required|string|max:2000',
        'imgsPublicacion.*' => 'image|max:4096', // 4MB máximo por imagen

    ];

    public function nuevaPublicacion()
    {
        $this->validate();
    
        $publicacion = Publicacion::create([
            'id_usuario' => Auth::id(),
            'contenido' => $this->contenidoPublicacion,
        ]);
      // Guardar imágenes si hay
      foreach ($this->imgsPublicacion as $img) {
        $nombre = $img->store('public/imagenes');
        $nombreArchivo = basename($nombre);

        \App\Models\ImgsPublicacion::create([
            'id_publicacion' => $publicacion->id,
            'url_img' => $nombreArchivo,
        ]);
    }

    // Limpia los campos
    $this->contenidoPublicacion = '';
    $this->imgsPublicacion = [];
    
        // Emitir evento a otros componentes
        $this->dispatch('publicacionCreada', $publicacion->id);
    }
    
    
    public function render()
    {
        return view('livewire.nueva-publicacion');
    }
}
