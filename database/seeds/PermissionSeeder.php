<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate(); 

        //Usuarios
        $viewUsersPermission =  Permission::create(['name'=> 'View users'  ]);
        $createUsersPermission = Permission::create(['name'=> 'Create users'  ]);
        $updateUsersPermission = Permission::create(['name'=> 'Update users'  ]);
        $deleteUsersPermission = Permission::create(['name'=> 'Delete users'  ]);

        //Roles
        $viewRolesPermission =  Permission::create(['name'=> 'View roles'  ]);
        $createRolesPermission = Permission::create(['name'=> 'Create roles'  ]);
        $updateRolesPermission = Permission::create(['name'=> 'Update roles'  ]);
        $deleteRolesPermission = Permission::create(['name'=> 'Delete roles'  ]);

        //Permisos
        $viewPermissionsPermission =   Permission::create(['name'=> 'View permissions'  ]);
        $createPermissionsPermission = Permission::create(['name'=> 'Create permissions' ]);
        $updatePermissionsPermission = Permission::create(['name'=> 'Update permissions' ]);
        $deletePermissionsPermission = Permission::create(['name'=> 'Delete permissions' ]);

        //Carreras
        $viewCareersPermission =   Permission::create(['name'=> 'View careers'  ]);
        $createCareersPermission = Permission::create(['name'=> 'Create careers' ]);
        $updateCareersPermission = Permission::create(['name'=> 'Update careers' ]);
        $deleteCareersPermission = Permission::create(['name'=> 'Delete careers' ]);
        
        //Especialidad
        $viewSpecialtsPermission =   Permission::create(['name'=> 'View specialts'  ]);
        $createSpecialtsPermission = Permission::create(['name'=> 'Create specialts' ]);
        $updateSpecialtsPermission = Permission::create(['name'=> 'Update specialts' ]);
        $deleteSpecialtsPermission = Permission::create(['name'=> 'Delete specialts' ]);

        //Semestres
        $viewSemestersPermission =   Permission::create(['name'=> 'View semesters'  ]);
        $createSemestersPermission = Permission::create(['name'=> 'Create semesters' ]);
        $updateSemestersPermission = Permission::create(['name'=> 'Update semesters' ]);
        $deleteSemestersPermission = Permission::create(['name'=> 'Delete semesters' ]);

        //Periodo academico
        $viewAcademicsPermission =   Permission::create(['name'=> 'View academics'  ]);
        $createAcademicsPermission = Permission::create(['name'=> 'Create academics' ]);
        $updateAcademicsPermission = Permission::create(['name'=> 'Update academics' ]);
        $deleteAcademicsPermission = Permission::create(['name'=> 'Delete academics' ]);

        //Asignaturas
        $viewSubjectsPermission =   Permission::create(['name'=> 'View subjects'  ]);
        $createSubjectsPermission = Permission::create(['name'=> 'Create subjects' ]);
        $updateSubjectsPermission = Permission::create(['name'=> 'Update subjects' ]);
        $deleteSubjectsPermission = Permission::create(['name'=> 'Delete subjects' ]);

        //Calificaciones
        $viewRatingsPermission =   Permission::create(['name'=> 'View ratings'  ]);
        $createRatingsPermission = Permission::create(['name'=> 'Create ratings' ]);
        $updateRatingsPermission = Permission::create(['name'=> 'Update ratings' ]);
        $deleteRatingsPermission = Permission::create(['name'=> 'Delete ratings' ]);


        //Estudiantes
        $viewStudentsPermission =   Permission::create(['name'=> 'View students'  ]);
        $createStudentsPermission = Permission::create(['name'=> 'Create students' ]);
        $updateStudentsPermission = Permission::create(['name'=> 'Update students' ]);
        $deleteStudentsPermission = Permission::create(['name'=> 'Delete students' ]);
    }
}
