@extends('layouts.app') @section('content')
@foreach($students as $student)
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">PHP Laravel Project - CRUD{!!$student->id!!}</h1>
			<div class="text-left"><a href="/student" class="btn btn-outline-primary">Student List</a></div>

			<form id="add-frm" method="POST"  action="{{route('update',$student->id)}}" class="border p-3 mt-2">	
				@csrf
				@method("PUT")	
				<div class="control-group col-6 text-left">
					<label for="id">id</label>
					<div>
						<input type="text" id="id" value="{!!$student->id!!}" class="form-control mb-4" name="id"
							readonly>
					</div>
				</div>
				<div class="control-group col-6 text-left">
					<label for="fullname">fullname</label>
					<div>
						<input type="text" id="fullname" value="{!!$student->fullname!!}" class="form-control mb-4" name="fullname"
							 required>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="address">address</label>
					<div>
						<input id="address" value="{!!$student->address!!}" class="form-control mb-4" name="address"
							 rows="" required>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">birthday</label>
					<div>
						<input type="date" value="{!!$student->birthday!!}" id="price" class="form-control mb-4" name="birthday"
							placeholder="Enter Price" required>
					</div>
				</div>
				
				@endforeach
				

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Edit</button></div>
			</form>
		</div>
	</div>
</div>
@endsection