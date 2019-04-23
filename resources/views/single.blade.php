@extends('layouts/main')

@section('content')
<h1>Single article view</h1>
<h3>Post author: {{ $user->name }}</h3>
{{ $post->post_content }}

</br></br>

@if ($post->comments->count())

	<h4 style="text-decoration: underline;"><b>Comments:</b></h4></br>

	@foreach ($post->comments as $comment)
	<p>
		<b>User ID:</b> {{ $comment->comment_author }}</br>
		<b>Date:</b> {{ $comment->comment_date }}</br>
		<b>Content:</b>
		<i>{{ $comment->content }}</i></br></br>
	</p>
	@endforeach

@endif


@endsection