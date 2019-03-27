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
    	$user = new \App\User();
    	$user->name = $request->input('contact_name');
    	$user->email = $request->input('contact_email');
    	$user->password = "123";
    	// $user->save();
    	return view('confirm', array( 
    		'user' => $user));
    }
}
