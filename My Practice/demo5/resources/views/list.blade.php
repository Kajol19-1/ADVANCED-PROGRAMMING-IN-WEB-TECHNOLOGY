<table border="1">
        <tr>
            <th>Content Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Video</th>
            <th>Audio</th>
            <th>Genre</th>
            <th>Language</th>
            <th>Country</th>
            <th>Release Date</th>
            <th>Runtime</th>
            <th>Director</th>
            <th>Cast</th>
            <th>User Id</th>
            
        </tr>
        @foreach($contents as $c)
            <tr>
                <td><a href="{{route('details',['content_id'=>$c->content_id])}}">{{$c->content_id}}</a></td>
                
                <td>{{$c->title}}</td>
                <td>{{$c->description}}</td>
                <td>{{$c->image}}</td>
                <td>{{$c->video}}</td>
                <td>{{$c->audio}}</td>
                <td>{{$c->genre}}</td>
                <td>{{$c->language}}</td>
                <td>{{$c->country}}</td>
                <td>{{$c->release_date}}</td>
                <td>{{$c->runtime}}</td>
                <td>{{$c->director}}</td>
                <td>{{$c->cast}}</td>
                <td>{{$c->user_id}}</td>
                <td><a href="/content/edit/{{$c->content_id}}/{{$c->title}}">Edit</a></td>

                
            </tr>
        @endforeach
    </table>