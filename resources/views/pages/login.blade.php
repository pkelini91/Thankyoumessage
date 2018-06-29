@extends('layouts.app')
@section('content')


        <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h2>Login </h2>

<form role="form" id="contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">

    {{ csrf_field() }}




    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <a href="/contact1" class="btn main-btn pull-right">Login!</a>


        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>

</body>
</html>


@stop