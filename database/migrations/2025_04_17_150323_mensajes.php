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
        Schema::create('mensajes',function(Blueprint $table){
            $table->id()->unique();
            $table->text('contenido');
            $table->unsignedBigInteger('id_receptor');
            $table->foreign('id_receptor')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_emisor');
            $table->foreign('id_emisor')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('fecha');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('mensajes');
    }
};
