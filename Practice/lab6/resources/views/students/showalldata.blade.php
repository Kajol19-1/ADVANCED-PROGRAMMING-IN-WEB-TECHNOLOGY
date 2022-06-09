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
        @foreach($products as $s)
            <tr>
                <td><a href="{{route('details',['s_id'=>$s->s_id])}}">{{$s->name}}</a></td>
                <td>{{$s->s_id}}</td>
                <td>{{$s->dob}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->phone}}</td>
            </tr>
        @endforeach
    </table>
@endsection