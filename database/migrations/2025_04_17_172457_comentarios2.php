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
        Schema::table('comentarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id_padre')->nullable(); // clave para la jerarquía        
            $table->foreign('id_padre')->references('id')->on('comentarios')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropColumn(['id_padre']);
        });
        
    }
};
