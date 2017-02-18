<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $hidden=array('password');

    protected $fillable = [
        'firstname','lastname', 'email', 'telephone',
    ];


    public static $rules=array(
        'firstname'=>'required|min:2|alpha',
        'lastname'=>'required|min:2|alpha',
        'email'=>'required|email|unique:users',
        'password'=>'required|alpha_num|between:8,12|confirmed',
        'password_confirmation'=>'required|alpha_num|between:8,12',
        'telephone'=>'required|between:10,12',
        'admin'=>'integer'

        );
    public function getAuthIdentifier(){
        return $this->getKey();
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
