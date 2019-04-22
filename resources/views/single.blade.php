@extends('layouts/main')

@section('content')
<h1>Single article view</h1>
<h3>Post author: {{ $user->name }}</h3>
{{ $post->post_content }}
@endsection