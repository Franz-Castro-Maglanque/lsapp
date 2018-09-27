@extends('layouts/app')

@section('content')
<<<<<<< HEAD
<h1>Update Post</h1>
=======
<h1>Create Post</h1>
>>>>>>> 1508acf5c8e0ba9bd57e33322ef9f6191bcda6dd

    {!! Form::open(['action' => ['PostsController@update',$post->id],'method' => 'POST']) !!}
    
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control','placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control','placeholder' => 'Body Text'])}}
        </div>
<<<<<<< HEAD
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
   
=======
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
   {{$post->id}}
>>>>>>> 1508acf5c8e0ba9bd57e33322ef9f6191bcda6dd
@endsection