@extends('layouts/main')

@section('content')
<h1>Articles view</h1>

@foreach ( $posts as $post )

	<li><b>Author ID:</b> {{ $post->post_author }}</li>
	<a href="articles/{{ $post->post_name }}">{{ $post->post_title }}</a></br></br>
	
@endforeach

@endsection

@section('title', 'Articles')