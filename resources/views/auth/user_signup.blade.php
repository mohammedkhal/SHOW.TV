@extends('layouts.app')
@section('content')
<h3>user sign up  @-@</h3>
<hr>
<form  action="{{route('auth.sign-up.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" id="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" name="first_name" id="first_name">
  </div>
  <div class="form-group col-md-4">
    <label for="second_name">Second Name</label>
    <input type="text" class="form-control" name="second_name" id="second_name">
  </div>
  <div class="form-group col-md-4">
    <label for="family_name">Family Name</label>
    <input type="text" class="form-control" name="family_name" id="family_name">
  </div>
  </div>
  <div class="custom-file col-md-4">
    <input type="file" class="custom-file-input" name="avatar" id="avatar">
    <label class="custom-file-label" for="customFile">Upload Avatar</label>
  </div><br>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>


@endsection