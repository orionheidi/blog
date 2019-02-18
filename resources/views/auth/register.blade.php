@extends('layouts.master')

@section('title', 'Create a registration')

@section('content')

<div class="container">
<form method="POST" action="{{ route('register') }}">
   {{-- <form method="POST" action="/blog/public/posts"> --}}
    @csrf
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Name</label>
        <div class="col-8">
        <input id="text" name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} " value= "{{ old('name') }}" >
            @include('partials.invalid-feedback',['field' => 'name'])
    </div>
    </div>
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
        <input id="text" name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} " value= "{{ old('password') }}" >
            @include('partials.invalid-feedback',['field' => 'password'])
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Age</label>
        <div class="col-8">
        <select id ="age" name="age" class="form-control" >
            @for ($i=1;$i<=100;$i++)
        <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
            @include('partials.invalid-feedback',['field' => 'age'])
        </div>
    </div>
    @if($message = session('message'))
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @endif
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
</form>
</div>
@endsection