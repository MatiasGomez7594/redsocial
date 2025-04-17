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
        Schema::create('me_gustas_publicaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario'); // clave foránea
            $table->unsignedBigInteger('id_publicacion'); // clave foránea
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_publicacion')->references('id')->on('publicaciones')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('me_gustas_publicaciones');

    }
};
