<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactContrroller extends Controller
{
   public function create() {

        $contacts = Contact::all();

        return view('contact', [
            'contacts' => $contacts
        ]);
    }

    public function store() {

        $request = request();

        $result = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'message' => 'required|max:255'
        ], [
            'name.required' => 'Please entr your name!',
            'email.required' => 'We need your email.',
            'message.required' => 'Please enter your message.'
        ]);

        // do form processing here
        $data = $request->all();

        $contact = new Contact();
        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->message = $data['message'];
        $contact->save();

        return redirect('/contact')
            ->with('message', 'Your contact was successfully processed. I will be in touch with you soon.');
    }
}

