<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datapro;
use App\Category;
//use App\Http\Requests;
use View;
use Validator, Redirect, Input;

use App\Http\Requests;

class StoreController extends Controller
{
    public function _construct(){
    	$this->beforeFilter('csrf',array('on'=>'post'));
    }
    public function getIndex(){
    	return view('store.index')
    	->with('datapros',Datapro::take(2)->orderBy('created_at','DESC')->get());
    }
    public function getView($id){
    	return View::make('store.view')->with('datapro', Datapro::find($id));
    }

    public function getSearch(){
    	$keyword=Input::get('keyword');

    	return view('store.search')
    	->with('datapros',Datapro::where('title','LIKE','%'.$keyword.'%')->get())
    	->with('keyword',$keyword);
    }
}
