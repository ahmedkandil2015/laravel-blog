@extends('layouts.master')
@section('title')
Creat New Account
@endsection
@section('content')
<div id="content" class="site-content">
	<div id="blog-wrapper">
		<div class="blog-holder center-relative">
		<h1>Registration</h1>
		<form action="/register" method="POST">
			{{csrf_field()}}
			<div class="form-group">
				<label for="">User Name</label>
				<input type="text" name="name" class="form-control" require>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="email" class="form-control" require>
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="password" class="form-control" require>
			</div>
			<div class="form-group">
				<label for="">Password Confirmation</label>
				<input type="password"  name="password_confirmation" class="form-control" require>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Create</button>
			</div>
			<div class="form-groupor">
				@include('layouts.errors')
			</div>
		</form>
		</div>
	</div>
</div>
@endsection