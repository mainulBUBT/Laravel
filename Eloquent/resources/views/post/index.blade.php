@extends('layouts.app')

@section('main')


<div class="wrap-table">
	<a href="{{route('post.create')}}" class="btn btn-sm btn-primary">Add Post</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>All Data</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Slug</th>
						<th>Content</th>
						<th>Category ID</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $values as $value )
					<tr>
						<td>{{$loop->index + 1}}</td>
						<td>{{$value->title}}</td>
						<td>{{$value->slug}}</td>
						<td>{{$value->content}}</td>
						<td>{{$value->category_id}}</td>
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