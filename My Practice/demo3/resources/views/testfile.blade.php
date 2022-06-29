<form enctype="multipart/form-data" method="post" action="{{route('upload')}}">
{{@csrf_field()}}
<input type="file" name="video">
    @error('video')
    <span>{{$message}}</span>
        @enderror

    <input type="file" name="image">
    @error('image')
    <span>{{$message}}</span>
        @enderror
    
        <input type="file" name="audio">
    <input type="submit" value="upload">
    @error('image')
    <span>{{$message}}</span>
        @enderror

</form>
