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
			

			<h2><i class="halflings-icon edit"></i><span class="break"></span>File Input</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" role="form" action="{{route('publish.store')}}" method="post" enctype="multipart/form-data">@csrf
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="focusedInput">Title </label>
						<div class="controls">
							<input class="input-xlarge focused" name="title" id="focusedInput" type="text">
						</div>
					</div>
							 <div class="control-group">
								<label class="control-label" for="selectError3">Plain Select</label>
								<div class="controls">
								  <select id="selectError3" name="category">
									<option value="a">Option 1</option>
									<option value="b">Option 3</option>
									<option value="c">Option 4</option>
									<option value="d">Option 5</option>
								  </select>
								</div>
							  </div>
					<div class="control-group">
						<label class="control-label" for="fileInput">File input</label>
						<div class="controls">
							<input class="input-file uniform_on" name="file" id="fileInput" type="file">
						</div>
					</div> 
					
					
					
					
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save changes</button>
						<button type="reset" class="btn">Cancel</button>
					</div>
				</fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->	


@endsection()