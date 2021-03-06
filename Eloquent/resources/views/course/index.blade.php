@extends('layouts/app')

@section('main')
<div class="wrap-table">
	<a href="{{route('course.create')}}" class="btn btn-warning btn-sm">Add New Course</a>
	<a href="{{route('student.index')}}" class="btn btn-primary btn-sm">All Students</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>All Data</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Slug</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($values as $value)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$value->name}}</td>
						<td>{{$value->slug}}</td>
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