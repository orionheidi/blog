<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All posts</title>
</head>
<body>
    <div>
        <ul>
        @foreach($posts as $post)
        <li>
        {{ $post->title }}
        <br>
        {{ $post->body }}
        </li>
        @endforeach
        </ul>
    </div>
</body>
</html>