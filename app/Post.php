<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    		'title','subtitle','slug','image','body','status'
    ];
     
	public function getRouteKeyName(){
		return 'slug';
	} 
	public function tags(){
    	return $this->belongsToMany('App\tag','post_tags')->withTimestamps();
	}
	public function categories(){
    	return $this->belongsToMany('App\category','category_posts')->withTimestamps();;
	}
	// public function getRouteKeyName(){
	// 	return 'slug';
	// }

}
