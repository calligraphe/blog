@extends('layouts/main')

@section('content')
<h1>Contact list view</h1>

@foreach ( $contacts as $contact )
	<ul>
		<h4>Name: {{ $contact->contact_name }}</h4>
		<li>Date: {{ $contact->contact_date }}</li>
		<li>Email: {{ $contact->contact_email }}</li>
		<li>Message: {{ $contact->contact_message }}</li>
	</ul>
@endforeach

@endsection

@section('title', 'Contacts list')