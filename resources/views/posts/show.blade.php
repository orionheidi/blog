@extends('layouts.master')

@section('title',$post->title)


@section('content')
    <div>{{ $post->title }}</div>  
        <div>{{ $post->body}}</div>
        <hr/>
        @foreach($post->comments as $comment)
        <div class="p-4 alert alert-success">
                <div class ="text-muted">  
                    {{$comment->created_at}}
                </div>
            <strong>{{$comment->author}} says: </strong>
            {{ $comment->text}}
        </div>
        @endforeach
@endsection