@extends('layouts.app')
@section('content')
<h3>User Sign in @-@</h3>
<form action="{{route('auth.sign-in.auth')}}" method="POST" >
    @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">User name</label>
          <input type="text" class="form-control" name="username" id="exampleInputEmail1"  placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <button class="btn btn-success" ><a href="{{route('auth.sign-up')}}" >Or you can Sign up </a> </button>

 @endsection