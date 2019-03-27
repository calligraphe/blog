@extends('layouts/main')

@section('content')
<h1>Articles view</h1>

@foreach ( $posts as $post )
	<h4>{{ $post->post_title }}</h4>
	{{ $post->post_content }}
@endforeach

@endsection