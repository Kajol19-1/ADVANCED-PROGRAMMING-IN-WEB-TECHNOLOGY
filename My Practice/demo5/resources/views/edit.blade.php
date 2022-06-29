
<form enctype="multipart/form-data" method="post" action="{{ route('upload') }}">
{{@csrf_field()}}

    Content Id: <input type="text" value="{{$content->content_id}}" name="content_id"> </br>
    @error('content_id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Title : <input type="text" value="{{$content->title}}" name="title"> </br>
    @error('title')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Description : <input type="text" value="{{$content->description}}" name="description"> </br>
    @error('description')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
   
    <input type="file" name="image" />
    <img src="/upload/{{$content->image}}">

    @error('image')
    <span>{{$message}}</span>
        @enderror
        <br><br>

    <input type="file" name="video" value="{{$content->video}}">
    @error('video')
    <span>{{$message}}</span>
        @enderror
        <br><br>
    
   <input type="file" name="audio" value="{{$content->audio}}">
    @error('audio')
    <span>{{$message}}</span>
        @enderror
        <br><br>

        Genre: <input type="text" value="{{$content->genre}}" name="genre"> </br>
    @error('genre')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

   Language : <input type="text" value="{{$content->language}}" name="language"> </br>
    @error('language')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Country : <input type="text" value="{{$content->country}}" name="country"> </br>
    @error('country')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Release Date : <input type="date" value="{{$content->release_date}}" name="release_date"> </br>
    @error('release_date')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Run time : <input type="text" value="{{$content->runtime}}" name="runtime"> </br>
    @error('runtime')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

   Director: <input type="text" value="{{$content->director}}" name="director"> </br>
    @error('director')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Cast : <input type="text" value="{{$content->cast}}" name="cast"> </br>
    @error('cast')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    User id : <input type="text" value="{{$content->user_id}}" name="user_id"> </br>
    @error('user_id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror




        <input type="submit" value="Edit">

</form>