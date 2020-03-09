@extends('admin.dashboard')
@section('admin-content')
<div class="row-fluid sortable">	
	<a class="btn btn-success col-lg-offset-5" href="">Add File</a>
	
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Post Document</h2>
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
						<th>Category</th>
						<th>file</th>
						<th>Actions</th>
					</tr>
				</thead>   
				<tbody>

			
					
					<tr>
						<td class="center"></td>
						<td class="center"></td>
						<td class="center"></td>
						<td class="center"></td>
						
						<td class="center">
							<a class="btn btn-success" href="#">
								<i class="halflings-icon white zoom-in"></i>  
							</a>
							<a class="btn btn-info" href="">
								<i class="halflings-icon white edit"></i>  
							</a>
							
							
						</td>
				
					
				</tbody>
			</table>            
		</div>
	</div><!--/span-->
	
</div><!--/row-->		


@endsection()