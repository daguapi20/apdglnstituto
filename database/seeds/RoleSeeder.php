<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $adminRole = Role::create(['name'=>'Admin']);
        $studentRole = Role::create(['name'=>'Student']);
        $teacherRole = Role::create(['name'=>'Teacher']);

    }
}
