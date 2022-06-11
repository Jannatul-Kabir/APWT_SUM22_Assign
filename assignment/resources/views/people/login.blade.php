@extends('layout.layout')
@section('content')
<h1>Log In</h1>
<form action="" method="post">
    {{@csrf_field()}}
    Email : <input type="text" value="{{old('email')}}" name="email"> </br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Password: <input type="password" name="password"></br>
    <input type="submit" value="Create">
</form>
@endsection