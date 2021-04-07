@extends("layout.main")



@section("title")

Home Page

@endsection




@section("body")


<ul>

<li>First Name :{{Auth::user()->first_name}}</li>
<li>Last Name :{{Auth::user()->last_name}}</li>
<li>Email :{{Auth::user()->email}}</li>
<li><a href="{{route('signout')}}">Log Out</a></li>



</ul>


@endsection