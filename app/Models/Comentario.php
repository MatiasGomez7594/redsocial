<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $fillable = ['id_usuario', 'id_publicacion', 'contenido', 'id_padre'];

    public function usuario() {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function publicacion() {
        return $this->belongsTo(Publicacion::class, 'id_publicacion');
    }

    public function respuestas() {
        return $this->hasMany(Comentario::class, 'id_padre');
    }

    public function padre() {
        return $this->belongsTo(Comentario::class, 'id_padre');
    }

}


/**$comentario = Comentario::find(1);
$respuestas = $comentario->respuestas;

consulta para obtener comentarios principales y sus respuestas
$comentarios = Comentario::with(['usuario', 'respuestas.usuario'])
    ->where('id_publicacion', $idPublicacion)
    ->whereNull('id_padre')
    ->orderBy('created_at', 'asc')
    ->get();

*/






