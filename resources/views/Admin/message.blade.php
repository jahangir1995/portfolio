@extends('admin.dashboard')
@section('admin-content')


			<div class="row-fluid sortable">		
						<a class="btn btn-success col-lg-offset-5" href="{{route('author.create')}}">Add Aurhor</a>

				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Author list</h2>
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
								  <th>Author ID</th>
								  <th>Author Name</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  @foreach($message as $v_message)

							<tr>
								<td>{{$loop->index+1}}</td>
								<td class="center">{{$v_message->subject}}</td>
								<td class="center">{{$v_message->email}}</td>
								<td class="center">{{$v_message->message}}</td>
								
								<td class="center">
									<a class="btn btn-info" href="">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									
										
										<a class="btn btn-danger" href="">
										<i class="halflings-icon white trash"></i> 
									</a>

								</td>
							</tr>
							@endforeach()
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		
				
@endsection()