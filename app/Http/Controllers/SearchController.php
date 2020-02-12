<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function search(Request $request){
    	 $query = $request->input('query');
        $posts = post::where('title','LIKE','%$query%')->get();
       return $posts;
          //      return view('blog.search',compact('posts','query'));

    }
}
