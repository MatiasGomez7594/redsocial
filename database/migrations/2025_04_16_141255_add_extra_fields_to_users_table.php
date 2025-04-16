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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->text('url_foto')->nullable();
            $table->string('telefono',10)->nullable();
            $table->string('estado',10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
     
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['telefono', 'url_foto', 'estado']);
        });
    }
};
