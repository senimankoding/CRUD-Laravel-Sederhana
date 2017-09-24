@extends('layouts.master')


@section('title','Blog seniman koding')
	

@section('content')
	<h1>Selamat Datang di Blog ini</h1>
	<h2>{{ $blog->title }} !! </h2>
	<hr>
	<p>
		{{ $blog->description }}
	</p>
@stop


	

