@extends('Blog.blog_layout')
@section('postslider')
@include('Blog.postslider');
@endsection

@section('blog_content')

<section class="post-area">
						<div class="row">
							@foreach($posts as $post)
							<div class="col-lg-6 col-md-6">
								<div class="single-post-item">
									<div class="post-thumb">
										<img class="img-fluid" src="{{asset(Storage::disk('local')->url($post->image))}}" alt="">
									</div>
									<div class="post-details">
										<h4><a href="{{route('postview',$post->slug)}}">{{$post->title}}</a></h4>
										<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
											exciting to think about setting up your own viewing station.</p>
										<div class="blog-meta">
											<span class="lnr lnr-calendar-full">{{$post->created_at}}</span>
											<a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>05</span></a>
										</div>
									</div>
								</div>
							</div>
							@endforeach


				<div class="col-lg-12">
					{{$posts->links() }}
								
			</div>
		</div>
	</section>


@endsection