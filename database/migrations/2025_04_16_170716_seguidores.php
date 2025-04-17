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
        Schema::create ('seguidores',function(Blueprint $table){
            $table->id()->unique();
            $table->unsignedBigInteger('id_seguidor'); // clave foránea
            $table->unsignedBigInteger('id_seguido'); // clave foránea
            $table->foreign('id_seguidor')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_seguido')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('seguidores');

    }
};
