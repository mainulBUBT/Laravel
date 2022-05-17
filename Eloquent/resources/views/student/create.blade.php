@extends('layouts/app')

@section('main')
<div class="wrap">
	<a href="{{route('course.index')}}" class="btn btn-primary">All Student</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>Add Students</h2>
			<form action="{{route('student.store')}}" method="POST">
				@csrf
				<div class="form-group">
					<label for="">Student Name</label>
					<input class="form-control" type="text" name="name">
				</div>
				<div class="form-group">
					<label for="">Student Age</label>
					<input class="form-control" type="text" name="age">
				</div>
				<div class="form-group">
					<label for="">Course Select</label>
					<select name="course" id="" class="form-control">
						@foreach($courses as $course)
						<option value="{{$course->id}}">{{$course->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Create Course">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection