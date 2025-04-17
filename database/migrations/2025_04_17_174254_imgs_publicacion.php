<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('imgs_publicacion',function(Blueprint $table){
            $table->id()->unique();
            $table->text('url_img');
            $table->unsignedBigInteger('id_publicaciones');
            $table->foreign('id_publicaciones')->references('id')->on('publicaciones')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schemma::dropIfExists('imgs_publicacion');
    }
};
