@extends('layouts.master')

@section('title', 'Log in')

@section('content')

<div class="container">
<form method="POST" action="{{ route('login') }}">
   {{-- <form method="POST" action="/blog/public/posts"> --}}
    @csrf
    <h2>Login</h2>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Email</label>
        <div class="col-8">
        <input id="text" name="email" type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " value= "{{ old('email') }}" >
        @include('partials.invalid-feedback',['field' => 'email'])
    </div>
    </div>
        <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Password</label>
        <div class="col-8">
        <input id="text" name="password" type="text" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} " value= "{{ old('password') }}" >
        @include('partials.invalid-feedback',['field' => 'password'])
    </div>
    </div>
    <div class="form-group">
        <input class="form-control {{ $errors->has("message") ? "is-invalid" : "" }}" 
        type="hidden" />
        @include("partials.invalid-feedback", ['field' => 'message'])
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>
</div>
@endsection