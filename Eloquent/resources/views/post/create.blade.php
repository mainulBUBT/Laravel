@extends('layouts.app')

@section('main')
<div class="wrap">
<a href="{{route('post.index')}}" class="btn btn-sm btn-primary">All Posts</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add Post</h2>
				<form action="{{ route('post.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Post Title</label>
						<input class="form-control" type="text" name="title">
					</div>
					<div class="form-group">
						<label for="">Post Category</label>		
						<select name="category" class="form-control">
						@foreach($cats as $cat)
							<option value="{{$cat->id}}">{{$cat->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="">Post Content</label>
						<textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Add Post">
					</div>
				</form>
			</div>
		</div>
	</div>
	

@endsection






