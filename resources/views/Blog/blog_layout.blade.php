@extends('index')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/blog.css')}}">
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-8">
 <h3> All Post </h3>
 @foreach($posts as $post)

 <div class="post">
  <div class="post_header">
    <h2><a href="{{route('postview',$post->slug)}}">{{$post->title}}</a></h2>
    <span class="glyphicon glyphicon-time"> </span>{{$post->created_at->diffForHumans()}}
  </div>

  <div class="post_content">
    <img class="img-fluid" src="{{asset(Storage::disk('local')->url($post->image))}}" alt="">
    <p>{{(substr($post->body, 0,300))}}..........</p>
    <a href="{{route('postview',$post->slug)}}" class="btn btn-warning btn-sm">Read More </a>
  </div>
  <div class="post_footer">
    <a href="" class="btn btn-primary btn-sm">Share Facebook</a>
    <a href="" class="btn btn-info btn-sm">Share Twiter</a>
    <a href="" class="btn btn-danger btn-sm">Share Instragm</a>
  </div>

</div>
@endforeach

</div>
<div class="col-sm-4">

  <div class="moduletable">
        <div class="title">
           <h3>Category</h3>
        </div>
         
          
          <div class="module-body">
             <div class="custom">
              <ul>
                <?php 
              $category = DB::table('categories')->get();
              foreach($category as $categories){?>
                <li><a href=""> {{$categories->category_name}} </a></li>
                <?php }?>
              </ul>
             </div>
          </div>
          
        </div>

</div>
    
  </div>
  <div class="col-lg-12">
          {{$posts->links() }}
                
      </div>
</div>



@endsection()