<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignacione_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('estudiante_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('tipomatricula_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->date('fecha_matricula');
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
        Schema::dropIfExists('matriculas');
    }
}
