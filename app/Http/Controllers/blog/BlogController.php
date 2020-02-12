<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;


class BlogController extends Controller
{
    public function index(){
    	$posts =post::where('status',1)->paginate(4);
    	return view('Blog.blog_index',compact('posts'));
    }
     public function postview(post $slug){
     	return view('Blog.postview',compact('slug'));
     }

     public function tag(){
        return "yes";
    }
     public function category(){
        return "yes";
    }
     
}
