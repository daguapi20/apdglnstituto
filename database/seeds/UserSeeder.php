<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate(); 
        User::truncate(); 
        //Roles Ejemplo
        $adminRole = Role::create(['name'=>'Admin']);
        $studentRole = Role::create(['name'=>'Student']);
        $teacherRole = Role::create(['name'=>'Teacher']);
        
        //Usuarios Ejemplo
        $admin = new User;
        $admin->cardn = '0604429696';
        $admin->name = 'Diego';
        $admin->lastname = 'Guapi';
        $admin->email = 'admin@gmail.com';
        $admin->password ='12345678';
        $admin->save();
        $admin->assignRole($adminRole);


        $student = new User;
        $student->cardn = '0604429691';
        $student->name = 'Armando';
        $student->lastname = 'Cuji';
        $student->email = 'student@gmail.com';
        $student->password ='12345678';
        $student->save();
        $student->assignRole($studentRole);

        $teacher = new User;
        $teacher->cardn = '0604429692';
        $teacher->name = 'Mike';
        $teacher->lastname = 'Rodriguez';
        $teacher->email = 'teach@gmail.com';
        $teacher->password ='12345678';
        $teacher->save();
        $teacher->assignRole($teacherRole);

        factory(App\User::class, 50)->create();

    }
}
