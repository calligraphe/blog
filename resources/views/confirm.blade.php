@extends('layouts/main')

@section('content')
<h1>Confirmation view</h1>
<h3>Merci {{ $user->name }}</h3>
Votre adresse mail: {{ $user->email }}
@endsection