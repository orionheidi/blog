@extends('layouts.master')

@section('title')
All post
@endsection 

@section('content')

    {{-- <div>
        <ul>
        @foreach($posts as $post)
        <li>
        {{ $post->title }}
        <br>
        {{ $post->body }}
        </li>
        @endforeach
        </ul>
    </div> --}}

<div class="container">   
  <main role="main" class="container">
    <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-3 mb-4 font-italic border-bottom">Vivify blog</h3>
      
    @foreach($user->posts as $post)

    <div class="blog-post">
      <h2 class="blog-post-title"> {{ $post->title }}</h2>
    <p class="blog-post-meta"> {{ $post->created_at }}</p>
     @if($post->user)
   <p>Created by {{ $post->user->name }}</p>
    @endif
      <p>{{ $post->body }}</p>
    </div><!-- /.blog-post -->
        
    @endforeach

    </div><!-- /.row -->
  </main><!-- /.container -->
    
@endsection 