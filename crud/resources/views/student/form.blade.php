@extends('student.layouts.app')

@section('main-content')

<div class="wrap mb-3">
	<a href="{{url('/')}}" class="btn btn-sm btn-primary">All Data</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>Add Student Data</h2>
			@include('validation')
			<form action="{{url('add/')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="">Name</label>
					<input class="form-control" type="text" name="name" value="{{old('name')}}">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input class="form-control" type="text" name="email" value="{{old('email')}}">
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input class="form-control" type="text" name="cell" value="{{old('cell')}}">
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input class="form-control" type="text" name="username" value="{{old('username')}}">
				</div>
				<div class="form-group">
					<label for="">Photo</label>
					<input class="form-control" type="file" name="photo">
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Add Data">
				</div>
			</form>
		</div>
	</div>
</div>

@endsection