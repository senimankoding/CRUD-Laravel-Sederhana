@extends('layouts.master')


@section('title','Blog seniman koding')
	

@section('content')
	<h1>Edit Datang di Blog ini</h1>
	
	<form action="/blog/public/blog/{{$blog->id}}" method="post">
		<input type="text" name="title" value="{{$blog->title}}"><br>
		<textarea name="description" rows="8" cols="40">{{$blog->description}}</textarea><br>
		<input type="submit" name="submit" value="edit">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
	</form>
@stop


	

