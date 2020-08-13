<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ver consultas
/*DB::listen(function($query){
    echo "<pre>{$query->sql}</pre>";
});*/

Route::get('/', function () {
    return view('auth.login');
});
// link de crear emails ->opcional
Route::get('email', function(){
    return new App\Mail\LoginCredentials(App\User::first(), 'abc12345' );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::middleware('role:Admin')
->put('users/{user}/roles', 'UsersRolesController@update')
->name('users.roles.update');

Route::middleware('role:Admin')
->put('users/{user}/permissions', 'UsersPermissionsController@update')
->name('users.permissions.update');

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');

Route::resource('notes', 'NoteController');
Route::resource('states', 'StateController');
Route::resource('students', 'StudentController');
Route::resource('teacherstates', 'TeacherstateController');
Route::resource('teachers', 'TeacherController');
Route::resource('shifts', 'ShiftController');
Route::resource('sections', 'SectionController');
Route::resource('sassignments', 'SassignmentController');
Route::resource('subjectvalidations', 'SubjectvalidationController');
Route::resource('assists', 'AssistController');
Route::resource('typeasists', 'TypeasistController');


Route::get('/home', 'HomeController@index')->name('home');

//Español
Route::resource('ofertacademicas', 'OfertacademicaController')->except(['show']);
Route::resource('especialidades', 'EspecialidadeController')->except(['show']);
Route::resource('periodacademicos', 'PeriodacademicoController')->except(['show']);
Route::resource('periodos', 'PeriodoController')->except(['show']);
Route::resource('secciones', 'SeccioneController')->except(['show']);
Route::resource('paralelos', 'ParaleloController')->except(['show']);

Route::resource('asignaturas', 'AsignaturaController')->except(['show']);

Route::resource('asignaciones', 'AsignacioneController')->except(['show']);
Route::resource('estudiantes', 'EstudianteController');
Route::resource('docentes', 'DocenteController');
Route::resource('matriculas', 'MatriculaController');
Route::resource('notas', 'NotaController');
Route::resource('suspensos', 'SuspensoController');
Route::resource('horarios', 'horarioController');

