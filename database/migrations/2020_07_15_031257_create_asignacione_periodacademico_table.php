<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionePeriodacademicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacione_periodacademico', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignacione_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('periodacademico_id')
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
        Schema::dropIfExists('asignacione_periodacademico');
    }
}
