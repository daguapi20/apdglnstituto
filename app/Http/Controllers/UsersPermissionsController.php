<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersPermissionsController extends Controller
{
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->syncPermissions($request->permissions);
        return back()->with('status', 'Los permisos actualizado con éxito');
    }


}
