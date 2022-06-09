<html>
    <head></head>
    <body>
        <div>
       <a href="{{route('home')}}">Home</a>
        <a href="{{route('product')}}">Product</a>
        <a href="{{route('contact')}}">Contact</a>
        <a href="{{route('teams')}}">Our Teams</a>
        <a href="{{route('about')}}">About Us</a>

        </div>
        @yield("content")
    </body>
</html>