<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Datapro;
use App\Http\Requests;
use View;
use Validator, Redirect, Input;

class CategoriesController extends Controller
{
    public function _construct(){
    	$this->beforeFilter('csrf',array('on'=>'post'));
        $this->middleware('auth');
    }
    public function getIndex(){
    	return View::make('categories.index')->with('categories',Category::all());
    }
    public function postCreate(){
    	$validator=Validator::make(Input::all(),Category::$rules);
    	if ($validator->passes()) {
    		$category=new Category;
    		$category->name=Input::get('name');
    		$category->save();

    		return Redirect::to('admin/categories/index')->with('message','Category Created');
    	}return Redirect::to('admin/categories/index')
    	->with('message','Something went Wrong')
    	->withErrors($validator)
    	->withInput();
    }
    public function postDestroy(){
        $category=Category::find(Input::get('id'));
        if ($category) {
            $category->delete();
            return Redirect::to('admin/categories/index')
            ->with('message','Category Deleted');
            # code...
        }
        return Redirect::to('admin/categories/index')
        ->with('message','Something went Wrong ,try again');
    }
}