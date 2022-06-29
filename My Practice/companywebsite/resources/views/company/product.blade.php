@extends('layout.main')
@section('contain')
   
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Price</th>
        </tr>
        @foreach($products as $s)
            <tr>
                <td><{{$s->name}}</td>
                <td>{{$s->id}}</td>
                <td>{{$s->price}}</td>
            </tr>
        @endforeach
    </table>
@endsection