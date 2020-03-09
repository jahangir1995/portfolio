<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function index(){
    	$posts =post::where('status',1)->paginate(2);
    	return view('Blog.blog_layout',compact('posts'));
    }
     public function postview(post $slug){
     	return view('Blog.postview',compact('slug'));
     }
     public function post_by_category($id){
     	$post_by_category=category::where('category','2');
     	return view('Blog.post_by_category',compact('post_by_category'));
     }
        
}
