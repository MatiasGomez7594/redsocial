<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    use HasFactory;
    protected $table = 'publicaciones'; //Esto para indicarle bien el nombre de la tabla

    protected $fillable = ['id_usuario', 'contenido', 'imagen'];

    //obtengo todas las publicaciones de un usuario y/o la de sus seguidos
    public function usuario() {
        return $this->belongsTo(User::class, 'id_usuario');
    }
    //obtengo todos los comentarios relacionados con una publicacion
    public function comentarios() {
        return $this->hasMany(Comentario::class, 'id_publicacion')->whereNull('id_padre');
    }
    //obtengo todos las imagenes de una publicacion
    public function imgs()
    {
        return $this->hasMany(\App\Models\ImgsPublicacion::class, 'id_publicacion');
    }
}






