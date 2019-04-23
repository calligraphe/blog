@extends('layouts/main')

@section('content')
<h3><b>{{ $post->post_title }}</b></h3>
<b><i>Post author: {{ $user->name }}</i></b></br></br>
<p>{{ $post->post_content }}</p>
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

<style type="text/css">
	.comment_form {
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
	}
</style>

<form class="comment_form" method="POST" action="/articles/{{ $post->id }}/comments" class="box">
		@csrf

		<div class="field">
			<label class="label" for="description">New Comment</label>
			<div class="control">
				<input type="text" class="input" name="content" placeholder="Your Comment" required>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<button type="submit" class="button is-link">Add Comment</button>
			</div>
		</div>

		@include('errors')

	</form>

@endsection