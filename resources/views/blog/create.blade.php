@extends('layouts.master')


@section('title','Blog seniman koding')
	

@section('content')
	{{-- @if (count($errors)>0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif --}}

	<h1>create blog</h1>
	
	<form action="/blog/public/blog" method="post">
		<input type="text" name="title" value="{{ old('title') }}"><br>
		@if ($errors->first('title'))
			<p>{{ $errors->first('title') }}</p>
		@endif

		<textarea name="description" rows="8" cols="40">{{ old('description') }}</textarea><br>
		@if ($errors->first('description'))
			<p>{{ $errors->first('description') }}</p>
		@endif

		<input type="submit" name="submit" value="Create">
		{{csrf_field()}}
		{{-- <input type="hidden" name="_method" value="POST"> --}}
	</form>
@stop


	

