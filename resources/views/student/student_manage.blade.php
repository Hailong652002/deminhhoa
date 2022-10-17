@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">PHP Laravel Project - CRUD</h1>
			<div class="text-left"><a href="{{route('student.create')}}" class="btn btn-outline-primary">Add new
				student</a></div>

			<table class="table mt-3  text-left">
				<thead>
					<tr>
                        <th scope="col">id</th>
						<th scope="col">student fullname</th>
						<th scope="col" class="pr-5">birthday</th>
						<th scope="col">address</th>
					</tr>
				</thead>
				<tbody>
					@forelse($students as $student)
					<tr>
						<td>{!! $student->id !!}</td>
						<td class="pr-5 text-right">{!! $student->fullname !!}</td>
						<td>{!! $student->birthday !!}</td>
                        <td>{!! $student->address !!}</td>
						<td><a href="student/{!! $student->id !!}/edit"
							class="btn btn-outline-primary">Edit</a>
							<button type="button" class="btn btn-outline-danger ml-1"
								onClick='showModel({!! $student->id !!})'>Delete</button></td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No student found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
@section('footer')
@endsection