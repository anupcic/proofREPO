<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Datapro;
use App\Category;
use App\Http\Requests;
use View;
use Validator, Redirect, Input;

class EditController extends Controller
{
    
    
    public function _construct(){
        //$this->beforeFilter('csrf',array('on'=>'post'));
        $this->middleware('auth:admin');
    }
    public function getIndex(){
        $categories=array();
        foreach (Category::all() as $key => $category) {
            $categories[$category->id]=$category->name;
        }
        return View::make('edit.index')
        ->with('datapros',Datapro::all())
        ->with('categories',$categories);
    }
    public function postDestroy(){
        $datapro=Datapro::find(Input::get('id'));
        if ($datapro) {
            $datapro->delete();
            return Redirect::to('edit/index')
            ->with('message','Datapro Deleted');
            # code...
        }
        return Redirect::to('edit/index')
        ->with('message','Something went Wrong ,try again');
    }
}
