<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('titulo_academico');
            $table->date('fecha_ingreso');
            $table->string('telefono_fijo')->nullable();
            $table->string('telefono_movil');
            $table->foreignId('provincia_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('cantone_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->string('calle');

            $table->foreignId('estadocente_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignId('tipocontrato_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
