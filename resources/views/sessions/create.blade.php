@extends('layouts.master')
@section('title')
Login
@endsection
@section('content')
<div id="content" class="site-content">
	<div id="blog-wrapper">
		<div class="blog-holder center-relative">
		<h1>Login</h1>
		<form  method="POST" action="/login">
			{{csrf_field()}}

			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="email" class="form-control" require>
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="password" class="form-control" require>
			</div>

			<div class="form-group">
				<button class="btn btn-primary">Login</button>
			</div>
			<div class="form-groupor">
				@include('layouts.errors')
			</div>
		</form>
		</div>
	</div>
</div>
@endsection