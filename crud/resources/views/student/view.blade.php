@extends('student.layouts.app')

@section('main-content')
<div class="wrap mb-3">
	<a href="{{url('/')}}" class="btn btn-sm btn-primary">All Data</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>Add Student Data</h2>
			@include('validation')
            <div class="img-card">
            <img src="{{URL::to('').'/'.'media/student/'.$value->photo}}" alt="">
            <p class="text-center fonrt-weight-bold">{{$value->name}}</p>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td>Name</td>
                    <td>{{$value->name}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$value->email}}</td>
                </tr>
                <tr>
                    <td>Cell</td>
                    <td>{{$value->cell}}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>{{$value->username}}</td>
                </tr>
                <tr>
                    <td>Join at</td>
                    <td>{{date('d-m-Y', strtotime($value->created_at))}}</td>
                </tr>
            </table>
		</div>
	</div>
</div>
@endsection