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
        Schema::create ('publicaciones',function(Blueprint $table){
            $table->id()->unique();
            $table->string('nombre',100);//maximo de 255 caracteres, para mas usar text
            $table->string('email',200)->unique();
            $table->string('pass',25);
            $table->text('url_foto');
            $table->string('estado',10);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
