
@extends('layout.main')
@section ('title')
@endsection

@section ('body')

<div class="row">
<div class="col-md-6">
@if(count($errors)>0)
@foreach($errors->all() as $error)                                          
<li>{{ $error }}</li>
@endforeach
@endif

@if( session()->has('message'))
<div class="alert alert-danger">
                                                                             
{{session()->get('message')}}

</div>
@endif

<h2>Register</h2>
<form class="form-horizontal" method="post" action="{{route('signup')}}">
  <div class="form-group">
    <label for="exampleInputFName">First Name</label>
    <input type="text" class="form-control" id="exampleInputFName1"  placeholder="First Name" name="first_name">
    
  </div>
  <label for="exampleInputLName">Last Name</label>
    <input type="text" class="form-control" id="exampleInputLName1"  placeholder="Last Name" name="last_name">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Sign up</button>
  {{csrf_field()}}
</form>
</div>

<div class="col-md-6">
<h2>Login</h2>

<form class="form-horizontal" method="post" action="{{route('signin')}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Sign in</button>
  {{csrf_field()}}
</form>
</div>

</div>
@endsection
