<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipodocumento_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->string('dni')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('foto');
             
            $table->foreignId('estadocivile_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->date('fecha_nacimiento');

            $table->string('nacionalidad');

            $table->foreignId('ocupacione_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->boolean('discapacidad')->default(false);
            $table->string('tipo_discapacidad')->nullable();
            $table->integer('porcentaje')->nullable();

            $table->foreignId('provincia_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignId('cantone_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignId('etnia_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->string('email')->unique();

            $table->foreignId('tiposangre_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->string('miembro_hogar');
            $table->string('ingreso_ec');

            $table->foreignId('direccion_provincia_id')
            ->constrained('provincias')
            ->cascadeOnDelete();

            $table->foreignId('direccion_cantone_id')
            ->constrained('cantones')
            ->cascadeOnDelete();
            $table->string('calle');
            $table->string('telefono_fijo')->nullable();
            $table->string('telefono_movil')->nullable();
            $table->string('parentesco');
            $table->string('telefono_parentesco');

            $table->string('institucion_origen');
            $table->string('titulo_bachillerato');

            $table->string('nombre_padre');
            $table->foreignId('padre_ocupacione_id')
            ->constrained('ocupaciones')
            ->cascadeOnDelete();
            
            $table->foreignId('instruccione_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->string('nombre_madre');
            $table->foreignId('madre_ocupacione_id')
            ->constrained('ocupaciones')
            ->cascadeOnDelete();
            $table->foreignId('madre_instruccione_id')
            ->constrained('instrucciones')
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
        Schema::dropIfExists('estudiantes');
    }
}
