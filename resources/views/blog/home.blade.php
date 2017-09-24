@extends('layouts.master')


@section('title','Blog seniman koding')
	

@section('content')
	<center><H3>SELAMAT DATANG</H3></center>

	<hr>
	@foreach ($blogs as $blog)
		<li><a href="/blog/public/blog/{{$blog->id}}">{{ $blog->title }}</a></li>

		<form action="/blog/public/blog/{{$blog->id}}" method="post">
			<input type="submit" name="submit" value="delete">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="DELETE">
	    </form>
	@endforeach
@stop
