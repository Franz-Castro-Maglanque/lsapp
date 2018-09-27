@extends('layouts/app')

@section('content')
<h1>POSTS</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="card bg-faded">
         <h3><a href="post/{{$post->id}}">{{$post->title}}</a></h3>
         <small>Written On {{$post->created_at}}</small>
        </div>
        @endforeach
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
=======
    
>>>>>>> 1508acf5c8e0ba9bd57e33322ef9f6191bcda6dd
>>>>>>> parent of 59046c9... Revert "update"
    @else
        <p>No Posts Found</p>
    @endif
   
@endsection