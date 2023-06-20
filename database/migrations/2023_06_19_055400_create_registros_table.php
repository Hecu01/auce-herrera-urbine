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
        Schema::create('registros', function (Blueprint $table) {
            // Identificador
            $table->id();
            
            // Datos personales
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('sexo',100);
            $table->integer('dni')->unique();
            $table->integer('cuil');
            $table->string('email',100);
            $table->string('est_civil',100);

            // Datos de residencia
            $table->string('domicilio',100);
            $table->string('barrio',100);
            $table->string('ciudad',100);
            $table->string('provincia',100);
            $table->integer('cod_postal');
            
            // Datos de nacimiento
            $table->date('fec_nac');
            $table->string('lug_nac',100);
            $table->string('prov_nac',100);
            $table->string('nacionalidad',100);
            
            // Datos de contacto
            $table->integer('celular');
            $table->integer('tel_fijo')->nullable();
            $table->integer('tel_alternativo')->nullable();
            $table->string('pertenece_a',100)->nullable();

            // Datos académicos 
            $table->string('titulo_intermedio',100);
            $table->date('año_egreso');
            $table->string('escuela_egreso',100);
            $table->string('distrito_egreso',100);
            
            // Preguntas
            $table->boolean('hijos');
            $table->boolean('fam_a_cargo');
            
            // Carrera a estudiar 
            $table->foreignId('carrera_id')
                  ->nullable()
                  ->constrained('carreras')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            
            // Datos Laborales
            $table->boolean('trabaja');
            $table->string('actividad_trabajo',100)->nullable();
            $table->string('horario_trabajo',100)->nullable();
            $table->boolean('obra_social');

            // Otros datos
            $table->string('otro_estudio',100)->nullable();
            $table->string('otro_estudio_inst',100)->nullable();
            $table->date('otro_estudio_egreso')->nullable();
            $table->string('otro_estudio2',100)->nullable();
            $table->string('otro_estudio_inst2',100)->nullable();
            $table->date('otro_estudio_egreso2')->nullable();
            $table->string('fotoc_dni',255);
            $table->string('titulo',255);
            $table->string('certificado',255);
            $table->string('foto',255)->nullable();
            $table->string('visado_por',100);
            $table->boolean('fotoc_dni_ok');
            $table->boolean('fotoc_titulo_ok');
            $table->boolean('certificado_sec_ok');
            $table->boolean('foto_ok');
            $table->boolean('partida_nac_ok');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
