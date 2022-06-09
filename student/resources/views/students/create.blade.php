@extends('layouts.main')
@section('content')

<form action="" method="post">
    {{@csrf_field()}}
    Student Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Student Id : <input type="text" name="sid" value="{{old('sid')}}"> </br>
    @error('sid')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Date of Birth : <input type="date" value="{{old('dob')}}" name="dob"> </br>
    @error('dob')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Email : <input type="text" name="email" value="{{old('email')}}"> </br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Phone : <input type="text" name="phone" value="{{old('phone')}}"> </br>
    @error('phone')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
   
    <input type="submit" value="Create">
</form>
@endsection