@extends('layouts.main')
@section('content')
   
    <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Student Id</th>
            <th>Date Of Birth</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach($students as $s)
            <tr>
                <td><a href="{{route('details',['sid'=>$s->sid])}}">{{$s->name}}</a></td>
                <td>{{$s->sid}}</td>
                <td>{{$s->dob}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->phone}}</td>
            </tr>
        @endforeach
    </table>
@endsection