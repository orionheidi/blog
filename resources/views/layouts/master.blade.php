<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <title> 
    @yield('title')
    </title>
</head>
<body>
    @foreach($tags as $tag)
    <a href="tags-posts,['id'=t">{{$tag->id}}</a>
    @endforeach
    {{-- @include('partials.header') --}}
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>