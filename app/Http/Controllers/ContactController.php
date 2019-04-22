<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create() {
    	return view('contact');
    }

    public function store(ContactRequest $request) {
        // un nouveau instance
    	$contact = new \App\Contact(); 
        // recupere les donnees
    	$contact->contact_name = $request->input('contact_name');
    	$contact->contact_email = $request->input('contact_email');
        $contact->contact_message = $request->input('contact_message');
        // sauvegarde dans la BD
    	$contact->save();

    	return view('confirm', compact('contact'));
    }

    public function show ()
    {
        // recupere tous les contacts
        $contacts = \App\Contact::all();

        // les passe vers contact/contacts
        return view('contact.contacts', compact('contacts'));
    }
}
