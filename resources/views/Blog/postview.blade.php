@extends('Blog.blog_layout')
@section('blog_content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=264305617872052&autoLogAppEvents=1"></script>


<img class="img-fluid" src="{{asset(Storage::disk('local')->url($slug->image))}}" alt="">

<small>Created : {{$slug->created_at->diffForHumans()}}</small>

	@foreach($slug->categories as $category)
		<small class="pull-right">
			<a href="{{route('category')}}">{{$category->category_name}}</a>
		</small>
	@endforeach

</br>
{!! htmlspecialchars_decode($slug->body)!!}

	<h3>Tag Clouds</h3>
	@foreach($slug->tags as $tag)
	<a href="{{route('tag')}}"><small class="pull-left" style="border-radius: 5px; border: 1px solid gray; margin-right: 10px">
		{{$tag->name}}
	</small></a>
	@endforeach


<div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5"></div>

@endsection()