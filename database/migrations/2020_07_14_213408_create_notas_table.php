<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignacione_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignId('docente_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignId('asignatura_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignId('estudiante_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->string('docencia');
            $table->string('experimento_aplicacion');
            $table->string('trabajo_autonomo');
            $table->string('suma');
            $table->string('promedio_decimal');
            $table->string('examen_principal');
            $table->string('promedio_final');
            $table->string('promedio_letra');
            $table->string('numero_asistencia');
            $table->string('porcentaje_asistencia');
            $table->date('fecha')->nullable();
            $table->string('observacion');
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
        Schema::dropIfExists('notas');
    }
}
