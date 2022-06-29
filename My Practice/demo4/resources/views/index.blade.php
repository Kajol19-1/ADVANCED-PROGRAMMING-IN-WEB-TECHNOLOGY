<html>
    <head>
</head>
<body>
    <div class="drag-area">
        <form method="post" action="{{route('upload')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="video"/>
            <p>
                @if($errors->has('video'))
                {{$errors->first('video')}}
                @endif
            </p>
            <input type="submit" name="click"/>
</body>
    </html>