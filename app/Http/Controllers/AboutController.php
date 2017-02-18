<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Http\Requests;

class AboutController extends Controller
{
    public function _construct(){
        $this->beforeFilter('csrf',array('on'=>'post'));
    }
    public function getIndex(){
        return view('about.index');
    }
    
}
