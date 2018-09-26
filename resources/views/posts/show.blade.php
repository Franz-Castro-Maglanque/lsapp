@extends('layouts/app')

@section('content')
    <a href="http://localhost/lsapp/public/post" class="btn btn-secondary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
    {{$post->body}}
    </div>
    <hr>
    <small> Written On {{$post->created_at}}</small>
    <hr>
    <a href="{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection