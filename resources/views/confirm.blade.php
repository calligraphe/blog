@extends('layouts/main')

@section('content')
<h1>Confirmation view</h1>
<h3>Merci {{ $contact->contact_name }}</h3>
Votre adresse mail: {{ $contact->contact_email }}
@endsection