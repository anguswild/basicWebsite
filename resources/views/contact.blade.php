@extends('layouts.app')

@section('content')
<h1>Contact</h1>
<form action="contact/submit" method="post">
	@csrf
	<div class="form-group">
    <label for="name">Name</label>
		<input class="form-control" type="text" name="name" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
		<label for="email">E-Mail Address</label>
		<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
		<textarea class="form-control" placeholder="Enter message" name="message" cols="50" rows="10" id="message"></textarea>
  </div>
  <div>
		<input class="btn btn-primary" type="submit" value="Submit">
  </div>
</form>
@endsection
