<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Category;
use App\Datapro;
use View;
use Hash;
use Validator, Redirect, Input;

class UsersController extends Controller
{
    public function _construct(){
    	parent::_construct();
    	$this->beforeFilter('csrf', array('on'=>'post'));

    }

    public function getNewaccount(){
    	return view('users.newaccount');
    }
    public function postCreate(){
    	$validator=Validator::make(Input::all(),User::$rules);

    	if ($validator->passes()) {
    		$user=new User;
    		$user->firstname=Input::get('firstname');
    		$user->lastname=Input::get('lastname');
    		$user->email=Input::get('email');
    		$user->password=Hash::make(Input::get('password'));
    		$user->telephone=Input::get('telephone');
    		$user->save();

    		return Redirect::to('users/signin')->with('message','New Account has been created. please signin');
    	}
    	return Redirect::to('users/newaccount')
    	->with('message','Something went wrong ')
    	->withErrors($validator)
    	->withInput();

    }
    public function getSignin(){
    	return view('users.signin');
    }
    public function postSignin(){
    	if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
    		return Redirect::to('/')->with('message','Thanks fpr sign in');
    	}
    	return Redirect::to('users/signin')->with('message','email or password incorrrect');
    }

    public function getSignout(){
    	Auth::logout();
    	return Redirect::to('users/signin')->with('message','You have been sign out.');
    }
}
