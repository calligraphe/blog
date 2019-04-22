@extends('layouts/main')


@section('content')
<h1>Home page</h1>
<ul>
	@foreach ( $posts as $post )
		<li><a href="articles/{{ $post->post_name }}" style="text-decoration: underline;">
			{{ $post->post_title }}
			</a>
		</li>
	@endforeach
</ul>
@endsection

@section('title', 'Welcome')