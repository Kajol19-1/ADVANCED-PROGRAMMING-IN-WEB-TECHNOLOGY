@extends('layouts.main')
@section('content')
   
    <table border="1">
        <tr>
            <th>Content Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Genre</th>
            <th>Language</th>
            <th>Country</th>
            <th>Release Date</th>
            <th>Runtime</th>
            <th>Director</th>
            <th>Cast</th>
            <th>User Id</th>
        </tr>
        @foreach($contents as $s)
            <tr>
                <td><a href="{{route('details',['ccontent_id'=>$c->content_id])}}">{{$c->title}}</a></td>
                <td>{{$c->content_id}}</td>
                <td>{{$c->title}}</td>
                <td>{{$c->description}}</td>
                <td>{{$c->image}}</td>
                <td>{{$c->genre}}</td>
                <td>{{$c->language}}</td>
                <td>{{$c->country}}</td>
                <td>{{$c->release_date}}</td>
                <td>{{$c->runtime}}</td>
                <td>{{$c->director}}</td>
                <td>{{$c->cast}}</td>
                <td>{{$c->userid}}</td>
            </tr>
        @endforeach
    </table>
@endsection