@extends('layouts.master')
@section('title')
Creat New Post
@endsection
@section('content')
        <div id="content" class="site-content center-relative">
            <div class="single-post-wrapper content-1070 center-relative">
            	<h1>Create New Post</h1>
            </div>
            <div class="row">
            	<div class="col-md-8 offset-2">
            		
	            <form action="/posts" method="POST">
					{{csrf_field()}}
	            	<div class="form-group">
	            		<label for="Name" > Post Title</label>
	            		<input type="text" name="title" class="form-control">
	            	</div>
	            	<div class="form-group">
	            		<label for="Name" > Post Body</label>
	            		<textarea name="body" class="form-control"></textarea>
	            	</div>
	            	<div class="form-group">
	            		<button class="btn btn-primary"> Save</button>
	            	</div>            	
	            	<div class="form-group">
	            		@include('layouts.errors')
	            	</div>
	            </form>

            	</div>
            </div>
        </div>
@endsection