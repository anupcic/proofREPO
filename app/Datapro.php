<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapro extends Model
{
    protected $fillable=array('category_id','title','description');
    public static $rules=array(
    	'category_id'=>'required|integer',
    	'title' => 'required|min:3',
    	'description'=>'required' );

    public function category(){
    	return $this->belongsTo('Category');
    }
}
