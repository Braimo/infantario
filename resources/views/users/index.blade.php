@extends('layouts.principal')
@include('partials._head')
@section('title','Home')
@section('content')
@include('partials._floating')
<form class="go-bottom">
   <h2>To Bottom</h2>
   <div>
      <input id="name" name="name" type="text" required>
      <label for="name">Your Name</label>
   </div>
   <br>
   <div>
      <input id="phone" name="phone" type="tel" required>
      <label for="phone">Primary Phone</label>
   </div>
   <br>
   <div>
      <textarea id="message" name="phone" required></textarea>
      <label for="message">Message</label>
   </div>
</form>
@endsection
@include('partials._javascript')