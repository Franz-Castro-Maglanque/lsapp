@extends('layouts/app')

@section('content')
    <a href="http://localhost/lsapp/public/post" class="btn btn-secondary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
    {{$post->body}}
    </div>
    <hr>
    <small> Written On {{$post->created_at}}</small>

@endsection