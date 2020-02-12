@extends('admin.dashboard')
@section('admin-content')

	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" role="form" action="{{route('category.update',$category->id)}}" method="post">@csrf
							{{method_field('PATCH')}}
						  <fieldset>
						  	<div class="control-group">
								<label class="control-label" for="focusedInput">Category Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="{{$category->category_name}}" name="category_name" id="focusedInput" type="text">
								</div>
							  </div>
							
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Slug</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="{{$category->slug}}" id="focusedInput" name="slug" type="text">
								</div>
							  </div>
							 
							            
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">update</button>
							<button type="reset" class="btn"><a href="{{route('category.index')}}">Back</a> </button> 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->	
		
				
@endsection()