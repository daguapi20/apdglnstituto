<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UsersRolesController extends Controller
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
        $user->syncRoles($request->roles);
        return back()->with('status', 'Role actualizado con éxito');


    }


}
