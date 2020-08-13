<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UserSeeder::class);
        //$this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        // ESPAÑOL
        $this->call(OfertacademicaSeeder::class);
        $this->call(EspecialidadeSeeder::class);
        $this->call(PeriodacademicoSeeder::class);
        $this->call(PeriodoSeeder::class);
        $this->call(AsignaturaSeeder::class);
        $this->call(SeccioneSeeder::class);
        $this->call(ParaleloSeeder::class);
        $this->call(AsignacioneSeeder::class);
        //matricula estudiantes
        $this->call(TipodocumentoSeeder::class);
        $this->call(EstadocivileSeeder::class);
        $this->call(OcupacioneSeeder::class);
        $this->call(EtniaSeeder::class);
        $this->call(EstadestudianteSeeder::class);
        $this->call(InstruccioneSeeder::class);
        $this->call(TiposangreSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(CantoneSeeder::class);
        $this->call(EstudianteSeeder::class);
        //docentes
        $this->call(EstadocenteSeeder::class);
        $this->call(TipocontratoSeeder::class);
        $this->call(DocenteSeeder::class);
                
        //matriculas
        $this->call(TipomatriculaSeeder::class);
        //$this->call(EstadomatriculaSeeder::class);
        $this->call(MatriculaSeeder::class);


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
