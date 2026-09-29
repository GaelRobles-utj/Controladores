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
        Schema::create('administradores',function(Blueprint $tabla)
        {
            $tabla->id();
            $tabla->string('url_imagen');
            $tabla->string('rol');
            $tabla->string('usuario')->uniquie();
            $tabla->string('contraseña');
            $tabla->string('correo')->uniquie();
            $tabla->string('telefono')->uniquie();
            $tabla->string('direccion')->nullable();
            $tabla->string('estado');
            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradores');
    }
};
