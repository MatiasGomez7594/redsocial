<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgsPublicacion extends Model
{
    use HasFactory;
    //como no tengo timestamps los desactivo, para que eloquent no los inserte por defecto
    //public $timestamps = false;

    protected $fillable = ['url_img', 'id_publicacion'];
    protected $table = 'imgs_publicacion'; //Esto para indicarle bien el nombre de la tabla


    
    public function publicacion() {
        return $this->belongsTo(Publicacion::class, 'id_publicacion');
    }


    
}
