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
        Schema::create('aliados', function (Blueprint $table) {
            $table->id();
            $table->string('documento');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('comercio');
            $table->string('correo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aliados');
    }
};
