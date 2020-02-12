@extends('admin.dashboard')
@section('admin-content')

	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" role="form" action="{{ route('post.store')}} " method="post">@csrf
						  <fieldset>
						  	<div class="control-group">
								<label class="control-label" for="focusedInput">Author Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="author" id="focusedInput" type="text">
								</div>
							  </div>
							
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Title</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="title" type="text">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Subtitle</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="subtitle" id="focusedInput" type="text">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Slug</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="slug" id="focusedInput" type="text">
								</div>
							  </div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="image" id="fileInput" type="file">
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Write Blog </label>
							  <div class="controls">
								<textarea class="cleditor" name="body" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							 <div class="control-group">
								<label class="control-label">Status</label>
								<div class="controls">
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox1" name="status" value="option1">Publish
								  </label>
								
								 
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