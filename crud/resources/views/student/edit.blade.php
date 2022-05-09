@extends('student.layouts.app')

@section('main-content')

<div class="wrap mb-3">
	<a href="{{url('/')}}" class="btn btn-sm btn-primary">All Data</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>Add Student Data</h2>
			@include('validation')
			<form action="{{url('update/'. $data->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="">Name</label>
					<input class="form-control" type="text" name="name" value="{{$data->name}}">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input class="form-control" type="text" name="email" value="{{$data->email}}">
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input class="form-control" type="text" name="cell" value="{{$data->cell}}">
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input class="form-control" type="text" name="username" value="{{$data->username}}">
				</div>
				<div class="form-group">
					<img style="width:200px;" src="{{URL::to('').'/media/student/'.$data->photo}}" alt="">
                    <input type="hidden" name="old_photo" value="{{$data->photo}}">
				</div>
				<div class="form-group">
					<label for="">Photo</label>
					<input class="form-control" type="file" name="new_photo">
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Update Data">
				</div>
			</form>
		</div>
	</div>
</div>

@endsection