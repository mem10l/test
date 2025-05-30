@extends('layouts.app')


<h1>contact</h1>
<a href="/contacts/create">Create a contact</a>
<ul>
    @foreach($contacts as $contact)
        <li>
            <h2>{{ $contact->username }}</h2>
            <h3>{{ $contact->email }}</h3>
            <p>{{ $contact->message }}</p>
        </li>
    @endforeach
</ul>