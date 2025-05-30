@extends('layouts.app')

@section('content')
    

    <form action="/contacts" method="post" class="div">
    <h1>New Contact</h1>
      @csrf
      <div>
          <input type="text" name="username" id="username" placeholder="Enter your username">
      </div>
      <div>
          <input type="text" name="email" id="email" placeholder="Enter your Email">
      </div>
      <div>
          <input type="text" name="message" id="message" placeholder="Enter your Question"> 
      </div>
      <div>
          <input type="submit" name="create">
      </div>
    </form>
@endsection
