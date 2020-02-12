@extends('admin.dashboard')
@section('admin-content')

	<div class="row-fluid sortable">
		@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
							@endif
				<div class="box span12">
					<div class="box-header" data-original-title>
						

						<h2><i class="halflings-icon edit"></i><span class="break"></span>Author</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" role="form" action="{{route('author.update',$author->id)}}" method="post">@csrf
						  {{method_field('PATCH')}}
						  <fieldset>		
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Author Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="{{$author->Author_name}}" id="focusedInput" name="author_name" type="text">
								</div>
							  </div>						
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn"><a href="{{route('author.index')}}">Back</a> </button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->	
		
				
@endsection()