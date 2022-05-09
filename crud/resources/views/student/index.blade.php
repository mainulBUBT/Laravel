<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>



	<div class="wrap-table">
		<a href="{{url('form/')}}" class="btn btn-sm btn-primary">Add Data</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				@include('validation')
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($datas as $data)
						<tr>
							<td>{{$loop->index+ 1}}</td>
							<td>{{$data->name}}</td>
							<td>{{$data->gmail}}</td>
							<td>{{$data->cell}}</td>
							<td>{{$data->username}}</td>
							<td><img src="{{URL::to('').'/'.'media/student/'.$data->photo}}" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="{{url('view/' .$data->id)}}">View</a>
								<a class="btn btn-sm btn-warning" href="{{url('edit/'.$data->id)}}">Edit</a>
								<a class="btn btn-sm btn-danger" href="{{url('delete/'.$data->id)}}">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>