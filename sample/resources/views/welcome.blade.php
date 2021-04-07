@extends("layout.main")


@section("title")

welcome page

@endsection


@section("body")


<div class="row">


<div class="col-md-6">


@if(count($errors)>0)

<div class="alert alert-warning mt-5">
<ul>
@foreach($errors->all() as $error)

<li>{{$error}}</li>

@endforeach
</ul>
</div>

@endif


@if(session()->has("message"))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations!!!</strong> {{session()->get("message")}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif





<h2>Register Form</h2>


<form method="post" action="{{route('signup')}}">

{{csrf_field()}}

<div class="form-group">
    <label for="exampleInputFName">First Name</label>
    <input type="text" class="form-control" id="exampleInputFName"  placeholder="First Name" name="firstname">
   
  </div>

  <div class="form-group">
    <label for="exampleInputLName">Last Name</label>
    <input type="text" class="form-control" id="exampleInputLName"  placeholder="Last Name" name="lastname">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>

</div>


<div class="col-md-6">

@if(session()->has("message1"))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!!!</strong> {{session()->get("message1")}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif

<h2>Login Form</h2>

<form method="post" action="{{route('signin')}}">

{{csrf_field()}}

  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail"  placeholder="Enter email" name="email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Sign In</button>


</form>


@if(session()->has("message2"))

<div class="alert alert-success alert-dismissible fade show mt-5 " role="alert">
   {{session()->get("message2")}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif



</div>







@endsection