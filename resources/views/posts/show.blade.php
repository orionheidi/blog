@extends('layouts.master')

@section('title',$post->title)


@section('content')

@if(count($post->tags))
    <ul>
        @foreach($post->tags as $tag)
        <li>
            <a href="{{route('tags-posts',['id' => $tag->id])}}">{{ $tag->name }}</a>
        </li>
        @endforeach
    </ul>
@endif


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

<div class="container">
    <form method="POST" action="{{ route('comments-post',['id' => $post->id]) }}">
    @csrf
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Author</label>
    <div class="col-8">
            <input id="text" name="author" type="text" class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }} " value= "{{ old('author') }}" >
    @include('partials.invalid-feedback',['field' => 'author'])
    </div>
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Comment</label>
    <div class="col-8">
        <textarea id="textarea" name="text" cols="20" rows="5" class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }} " >{{ old('text') }} </textarea>
    @include('partials.invalid-feedback',['field' => 'text'])
    </div>
    </div>
    <div class="form-group row">
    <div class="offset-4 col-8">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

@endsection

