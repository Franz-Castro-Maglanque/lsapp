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
<<<<<<< HEAD
    <a href="http://localhost/lsapp/public/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

 
    {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])}}

    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {{Form::close()}}
=======
    <a href="{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
>>>>>>> 1508acf5c8e0ba9bd57e33322ef9f6191bcda6dd
@endsection