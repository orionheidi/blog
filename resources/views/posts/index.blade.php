@extends('layouts.master')

@section('title')
All post
@endsection 

@section('content')
<div class="container">   
  <main role="main" class="container">
    <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-3 mb-4 font-italic border-bottom">Vivify blog</h3>
      
    @foreach($posts as $post)

    <div class="blog-post">
      <h2 class="blog-post-title"> {{ $post->title }}</h2>
    <p class="blog-post-meta"> {{ $post->created_at }}</p>
     @if($post->user)
   <p>Created by {{ $post->user->name }}</p>
    @endif
      <p>{{ $post->body }}</p>
      <form method="POST" action="{{route('posts-destroy', ['id' => $post->id])}}">
          @csrf
          @method('DELETE')
          @csrf
          <button type="submit">Delete</button> 
          {{-- {{ method('DELETE')}}  ili jedno ili drugo ovo dole --}}
          {{-- <input type="hidden" name="_method" value="delete" />
          <button type="submit">Delete</button> --}}
      </form>
    </div><!-- /.blog-post -->
  </form>  
    @endforeach

    </div><!-- /.row -->
  </main><!-- /.container -->

  {{$posts->links()}} 
@endsection 
