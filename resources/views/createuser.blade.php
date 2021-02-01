@extends("layouts.main")

@section("form")

<h1>Registration Form</h1><hr>
<h3>Please insert the informations bellow:</h3>

{{Form::open(array('url'=>'test/register','method'=>'post'))}}

<input type="text" name="fullname" placeholder="Full Name"><br><br>
<input type="text" name="creditcard" placeholder="Credit Card"><br><br>
<input type="string" name="from" placeholder="From Date"><br><br>
<input type="string" name="to" placeholder="To Date"><br><br>
<input type="text" name="details" placeholder="More Details">
<input type="submit" value="REGISTER NOW!">

{{Form::close()}}

@stop