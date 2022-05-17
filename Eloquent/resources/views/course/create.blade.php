@extends('layouts/app')

@section('main')
<div class="wrap">
<a href="{{route('course.index')}}" class="btn btn-primary">All Courses</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>Course</h2>
			<form action="{{route('course.store')}}" method="POST">
				@csrf
				<div class="form-group">
					<label for="">Course Name</label>
					<input class="form-control" type="text" name="name">
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Create Course">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection







