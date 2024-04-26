<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string(('nombre'));
            $table->string('apellidos');
            $table->string('nombre_Completo');
            $table->string('direccion');
            $table->string('ciudad');
            $table->unsignedBigInteger('coche_id')->unique();
            $table->foreign('coche_id')
                  ->references('id')
                  ->on('coches')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
