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
            $table->increments('id');
            $table->integer('dni')->unique();
            $table->unsignedBigInteger('carrera')->unsigned();
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('nacionalidad',100);
            $table->string('sexo',100);
            $table->integer('cuil');
            $table->string('domicilio',100);
            $table->string('barrio',100);
            $table->string('ciudad',100);
            $table->string('provincia',100);
            $table->integer('cod_postal');
            $table->date('fec_nac');
            $table->string('lug_nac',100);
            $table->string('prov_nac',100);
            $table->string('email',100);
            $table->string('est_civil',100);
            $table->boolean('hijos');
            $table->boolean('fam_a_cargo');
            $table->integer('tel_fijo');
            $table->integer('celular');
            $table->integer('tel_alternativo');
            $table->string('pertenece_a',100);
            $table->string('titulo_intermedio',100);
            $table->date('año_egreso');
            $table->string('escuela_egreso',100);
            $table->string('distrito_egreso',100);
            $table->string('otro_estudio',100);
            $table->string('otro_estudio_inst',100);
            $table->date('otro_estudio_egreso');
            $table->string('otro_estudio2',100);
            $table->string('otro_estudio_inst2',100);
            $table->date('otro_estudio_egreso2');
            $table->boolean('trabaja');
            $table->string('actividad_trabajo',100);
            $table->string('horario_trabajo',100);
            $table->boolean('obra_social');
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
