<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    protected $fillable=array('firstname','lastname','email','password','telephone');
    public static $rules=array(
    	'firstname'=>'required',
    	'lastname' => 'required',
    	'email'=>'required|email',
    	'password'=>'required',
    	'telephone'=>'required' );


     protected $hidden = [
        'password', 'remember_token',
    ];
}
