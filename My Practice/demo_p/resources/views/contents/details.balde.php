@extends('layouts.main')
@section('content')
<h1> Content Details</h1>
Content Id:  {{$contents->content_id}}</br>
Title: {{$contents->title}}</br>
Description: {{$contents->description}}</br>
Image: {{$contents->image}}</br>

Genre: {{$contents->genre}}</br>
language: {{$contents->language}}</br>
Country: {{$contents->country}}</br>
Release Date: {{$contents->release_date}}</br>
Run Time: {{$contents->runtime}}</br>
Director: {{$contents->director}}</br>
Cast: {{$contents->cast}}</br>
User Id: {{$contents->user_id}}</br>

@endsection