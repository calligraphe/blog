<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //
    // function index() {
    // 	return view('contact');
    // }

    public function create() {
    	return view('contact');
    }

    public function store(ContactRequest $request) {
    	$contact = new \App\Contact();
    	$contact->contact_name = $request->input('contact_name');
    	$contact->contact_email = $request->input('contact_email');
        $contact->contact_message = $request->input('contact_message');
    	$contact->save();
    	return view('confirm', compact('contact'));
    }

    public function show ()
    {
        $contacts = \App\Contact::all();

        return view('contact.contacts', compact('contacts'));
    }
}
