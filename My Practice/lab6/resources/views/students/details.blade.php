@extends('layouts.main')
@section('content')
<h1> Student Details</h1>
Name:  {{$students->name}}</br>
Id: {{$students->s_id}}</br>
Date Of Birth: {{$students->dob}}</br>
Email:{{$students->email}}</br>
Phone:{{$students->phone}}</br>
@endsection