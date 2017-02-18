<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datapro;
use App\Category;
use App\Http\Requests;
use View;
use Validator, Redirect, Input;
use Auth;


class DataprosController extends Controller
{
    public function _construct(){
    	$this->beforeFilter('csrf',array('on'=>'post'));
    }
    public function getIndex(){
        // Early return 
        if (!Auth::check()) {
            # code...
            

            return "You are not logged in";
        }
    	$categories=array();
    	foreach (Category::all() as $key => $category) {
    		$categories[$category->id]=$category->name;
    	}
    	return View::make('datapros.index')
    	->with('datapros',Datapro::all())
    	->with('categories',$categories);
    }
    public function postCreate(){
    	$validator=Validator::make(Input::all(),Datapro::$rules);
    	if ($validator->passes()) {
    		$datapro=new Datapro;
    		$datapro->category_id=Input::get('category_id');
    		$datapro->title=Input::get('title');
    		$datapro->description=Input::get('description');
    		$datapro->save();

    		return Redirect::to('datapros/index')->with('message','data Created');
    	}return Redirect::to('datapros/index')
    	->with('message','Something went Wrong')
    	->withErrors($validator)
    	->withInput();
    }
    public function postDestroy(){
    	$datapro=Datapro::find(Input::get('id'));
    	if ($datapro) {
    		$datapro->delete();
    		return Redirect::to('datapros/index')
    		->with('message','Datapro Deleted');
    		# code...
    	}
        return Redirect::to('datapros/index')
        ->with('message','Something went Wrong ,try again');
    }
}
