@extends('index')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/blog.css')}}">
@section('content')
<div id="fb-root"></div>



<div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5"></div>

<div class="container">
  <div class="row">
    <div class="col-sm-8">


 <div class="post">
  <div class="post_header">
    <h2><a href="">{{$slug->title}}</a></h2>
    <span class="glyphicon glyphicon-time"> </span>Created : {{$slug->created_at->diffForHumans()}}
    <span class="glyphicon glyphicon-user"></span>
    @foreach($slug->categories as $category)
		<a href="">{{$category->category_name}}</a>
	@endforeach


  </div>
  <div class="post_content">
    <img class="img-fluid" src="{{asset(Storage::disk('local')->url($slug->image))}}" alt="">
    <p>{!! htmlspecialchars_decode($slug->body)!!}</p>
 
  </div>
  <div class="post_footer">
    <a href="" class="btn btn-primary btn-sm">Share Facebook</a>
    <a href="" class="btn btn-info btn-sm">Share Twiter</a>
    <a href="" class="btn btn-danger btn-sm">Share Instragm</a>
  </div>

</div>

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
 
</div>

@endsection()