@extends('admin.layouts.plain')
@section('content')
<h1>Health Center Management System</h1>
<p class="account-subtitle">Register</p>
<form action="{{route('register')}}" method="POST">
	@csrf
	<div class="form-group">
		<input class="form-control" name="name" type="text" value="{{old('name')}}" placeholder="Full Name">
	</div>
	<div class="form-group">
		<input class="form-control" name="email" type="text" value="{{old('email')}}" placeholder="Email">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Password">
	</div>
	<div class="form-group">
		<input class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-danger btn-block" type="submit">Register</button>
	</div>
</form>
@endsection