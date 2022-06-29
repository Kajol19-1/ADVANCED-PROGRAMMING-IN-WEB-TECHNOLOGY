
<form enctype="multipart/form-data" method="post" action="{{route('upload')}}">
{{@csrf_field()}}

    Content Id: <input type="text" value="{{old('content_id')}}" name="content_id"> </br>
    @error('content_id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Title : <input type="text" value="{{old('title')}}" name="title"> </br>
    @error('title')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Description : <input type="text" value="{{old('description')}}" name="description"> </br>
    @error('description')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
   
    <input type="file" name="image" value="{{old('image')}}" >
    @error('image')
    <span>{{$message}}</span>
        @enderror
        <br><br>

    <input type="file" name="video" value="{{old('video')}}" >
    @error('video')
    <span>{{$message}}</span>
        @enderror
        <br><br>
    
   <input type="file" name="audio" value="{{old('audio')}}" >
    @error('audio')
    <span>{{$message}}</span>
        @enderror
        <br><br>

        Genre: <input type="text" value="{{old('genre')}}" name="genre"> </br>
    @error('genre')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

   Language : <input type="text" value="{{old('language')}}" name="language"> </br>
    @error('language')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Country : <input type="text" value="{{old('country')}}" name="country"> </br>
    @error('country')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Release Date : <input type="date" value="{{old('release_date')}}" name="release_date"> </br>
    @error('release_date')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Run time : <input type="text" value="{{old('runtime')}}" name="runtime"> </br>
    @error('runtime')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

   Director: <input type="text" value="{{old('director')}}" name="director"> </br>
    @error('director')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    Cast : <input type="text" value="{{old('cast')}}" name="cast"> </br>
    @error('cast')
        <span class="text-danger">{{$message}}</span><br>
    @enderror

    User id : <input type="text" value="{{old('user_id')}}" name="user_id"> </br>
    @error('user_id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror




        <input type="submit" value="upload">

</form>