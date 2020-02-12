@extends('admin.dashboard')
@section('admin-content')

			<div class="row-fluid sortable">	
		<a class="btn btn-success col-lg-offset-5" href="{{route('post.create')}}">Add Post</a>
	
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Post list</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>index</th>
								  <th>title</th>
								  <th>Author</th>
								  <th>Slug</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>


						  	@foreach($posts as $post)
							<tr>
								<td>{{$loop->index+1}} </td>
								<td class="center">{{$post->title}}</td>
								<td class="center">{{$post->posted_by}}</td>
								<td class="center"> {{$post->slug }} </td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="{{route('post.edit', $post->id)}}" class="float-left">
										<i class="halflings-icon white edit"></i>  
									</a>
									<form id="delete-form-{{$post->id }}" action="{{route('post.destroy',$post->id)}}" method="post">@csrf 
										{{method_field('DELETE')}}
										<a class="btn btn-danger" href="{{ route('post.index') }}" onclick="if(confirm('Are you sure, You want to delete this?')){ event.preventDefault();document.getElementById('delete-form-{{$post->id}}').submit();}else{event.preventDefault();

										}" class="float-left">
										<i class="halflings-icon white trash"></i> 
									</a>

									</form>
									
								</td>
							</tr>
						@endforeach
						
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->				
@endsection  