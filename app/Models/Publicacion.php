<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    use HasFactory;
    protected $table = 'publicaciones'; //Esto para indicarle bien el nombre de la tabla

    protected $fillable = ['id_usuario', 'contenido', 'imagen'];

    public function usuario() {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function comentarios() {
        return $this->hasMany(Comentario::class, 'id_publicacion');
    }
    public function imgs() {
        return $this->hasMany(ImgsPublicacion::class, 'id_publicacion');
    }
}






