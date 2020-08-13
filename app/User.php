<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cardn','name', 'lastname', 'email', 'avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //funcion que de encriptado de contraseña personalizado
    public function setPasswordAttribute($password) 
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeAllowed($query)// politicas de acceso
    {
        if(auth()->user()->can('View', $this))
        {
            return $query;
        }

        return $query->where('id', auth()->id());

    }

}
