<?php

use Illuminate\Database\Seeder;
use App\Models\Paralelo;

class ParaleloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paralelo::truncate(); 

        $paralelo = new Paralelo;
        $paralelo->paralelo = 'A';
        $paralelo->save();

        $paralelo = new Paralelo;
        $paralelo->paralelo = 'B';
        $paralelo->save();

        $paralelo = new Paralelo;
        $paralelo->paralelo = 'C';
        $paralelo->save();

        $paralelo = new Paralelo;
        $paralelo->paralelo = 'D';
        $paralelo->save();
    }
}
