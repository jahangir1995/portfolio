<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts = post::all();
        return view('Admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags= tag::all();
        $categories = category::all();
        return view('Admin.post.post',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $validateData = $request->validate([
            'title'=>'required',
            'author'=>'required',
            'slug'=>'required',
            'image'=>'required'
        ]);
        if ($request->hasfile('image') ) {

        //return $request->image->getClientOriginalName();
        $imageName=$request->image->store('public');
      }
        
        $data = new post;
        $data->posted_by =$request->author;
        $data->title =$request->title;
        $data->subtitle =$request->subtitle; 
        $data->slug =$request->slug;
        $data->image =$imageName;
        $data->body =$request->body;
        $data->status =$request->status;

         $data->save();
        $data->tags()->sync($request->tags);
        $data->categories()->sync($request->category);
        
         return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =post::where('id',$id)->first();
        $tags= tag::all();
        $categories = category::all();
        return view('admin.post.edit',compact('post','tags','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title'=>'required|',
            'author'=>'required',
            'slug'=>'required',
            'image'=>'required'
             ]);
      if ($request->hasfile('image') ) {

        //return $request->image->getClientOriginalName();
        $imageName=$request->image->store('public');
      }

        $data = post::find($id);
        $data->posted_by =$request->author;
        $data->title =$request->title;
        $data->subtitle =$request->subtitle; 
        $data->slug =$request->slug;
        $data->image =$imageName;
        $data->body =$request->body;
        $data->tags()->sync($request->tags);
        $data->categories()->sync($request->category);
        $data->status =$request->status;

         $data->save();
         return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         post::where('id',$id)->delete();
        return redirect()->back();
    
    }
}
