<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable =[
    	'category_name','slug'
    ];
    public function posts(){
    	 return $this->belongsToMany('App\Post','Category_post');
    }

    public function getRouteKeyName(){
		return 'slug';
	} 
}
