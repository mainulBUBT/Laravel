@extends('layouts/app')

@section('main')
<div class="wrap-table">
	<a href="{{route('student.create')}}" class="btn btn-warning btn-sm">Add New Student</a>
	<a href="{{route('course.index')}}" class="btn btn-primary btn-sm">All Courses</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>All Data</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Age</th>
						<th>Course Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($values as $value)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$value->name}}</td>
						<td>{{$value->age}}</td>
						<td>{{$value->course->name}}</td>
						<td>
							<a class="btn btn-sm btn-info" href="#">View</a>
							<a class="btn btn-sm btn-warning" href="#">Edit</a>
							<a class="btn btn-sm btn-danger" href="#">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection