<?php

namespace App\Http\Controllers;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Providers\UserWasCreated;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateUserRequest;

use App\Models\Estudiante;
use App\Models\Docente;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$this->authorize('view');
        $query=trim($request->get('search'));
        $users = User::
            where('users.cardn','LIKE','%'.$query.'%')
            ->orWhere('users.email','LIKE','%'.$query.'%')
            ->paginate(10);
        //$users = User::allowed()->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /* $nombre='';
            $apellido='';
            $email='';
        $dni=$request->get('dni');
        $estudiante = Estudiante::where('dni',$dni);
        if($estudiante){
            $nombre=$estudiante->nombre;
            $apellido=$estudiante->apellido;
            $email=$estudiante->email;
        }*/

        $user = new User;

        

        $this->authorize('create', $user);

        $roles = Role::with('permissions')->get();
        $permissions = Permission::pluck('name', 'id');
        return view('users.create', compact('user', 'roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', new User ); // agregar nueva instancia de user

        $data= $request->validate([
            'cardn' => ['required', 'digits:10', 'unique:users'],
            'name' => ['required', 'regex:/^[\pL\s\-]+$/u', 'string', 'max:255'],
            'lastname' => ['required', 'regex:/^[\pL\s\-]+$/u',  'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
       
       //configuracion roles
        $cardn=$request->cardn;
        $role=$request->roles;
        $estudiante = Estudiante::where('dni',$cardn)->get();
        if(count($estudiante)>0){
            $role='Student';
        }

        $docente = Docente::where('dni',$cardn)->get();
        if(count($docente)>0){
            $role='Teacher';
        }
        if(is_null($role)){
            $errors=['Usuario sin role'];
            return redirect()->route('users.create')->with('status','usuario sin role');
        }
        //-->configuracion roles
        

        $data ['password'] = Str::random(8);

        $user = User::create($data);

        //Asignar roles
        $user->assignRole($role);  //$request->roles);
        //asignar permisos
        $user->givePermissionTo($request->permissions);
        //Enviar email
        UserWasCreated::dispatch($user, $data['password']);
        //Evento => usuarioCreado
        //Listener 0> Enviar las credenciales de login
        
        //Regresamos al usuario
        if(is_null($role)){
            return redirect()->route('users.index', $user)->with('status', 'Usuario creado sin role');
        }else{
            return redirect()->route('users.index', $user)->with('status', 'Usuario creado con éxito');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      $this->authorize('update', $user);

        $roles = Role::with('permissions')->get();
       //return $roles = Role::pluck('name', 'id');
        $permissions = Permission::pluck('name', 'id');
        return view('users.edit', compact('user', 'roles', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
         $this->authorize('update', $user);        
        $user->update($request->validated(
            
        ));

        return redirect()->route('users.edit', $user);
    }

    // Avatars store
    public function profile()
    {
       //return view('profile', array('user'=> Auth::user()));
        $user = \Auth::user();
        return view('users.profile',compact('user',$user));
    }
    
     // Avatars update
    public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::find(\Auth::user()->id); 
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
    
            
            if ($user->avatar !== 'default.png') {
                $file = public_path('uploads/avatars/' . $user->avatar);
                $file = 'uploads/avatars/' . $user->avatar;
                
    
                if (\File::exists($file)) {
                    unlink($file);
                }
    
            }
            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/avatars/' . $filename));
            Image::make($avatar)->resize(300, 300)->save('uploads/avatars/' . $filename);
            $user = \Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
    

        return back()
            ->with('success','Has subido la imagen correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
        return redirect()->route('users.index', $user)->with('status', 'Usuario eliminado con éxito');
    }
}
