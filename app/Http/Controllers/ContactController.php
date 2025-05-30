<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all(); 

        return view('contacts.index', ['contacts' => $contacts]); 
    }

    public function create() {
        return view('contacts.create'); 
    }
    public function store(Request $request) {

            $contact = Contact::create([
                'username' => $request['username'],
                'email' => $request['email'],
                'message' => $request['message']
            ]);
        
            return redirect("/contacts/" . $contact->contact);

    }
}

