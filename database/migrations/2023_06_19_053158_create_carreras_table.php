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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',300)->unique();
            $table->integer('anios');    
            $table->string('resolucion', 55);    
            $table->text('texto');      
            $table->text('imagen');  
            $table->text('nombre_carpeta');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
