<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
<<<<<<< HEAD
        // $posts = Post::orderBy('id');
=======
<<<<<<< HEAD
        // $posts = Post::orderBy('id')->paginate(1);
=======
        // $posts = Post::orderBy('id');
>>>>>>> 1508acf5c8e0ba9bd57e33322ef9f6191bcda6dd
>>>>>>> parent of 59046c9... Revert "update"
        //  return $posts = Post::where('id',2)->get();
        // $posts = DB::select("SELECT * FROM posts");
        return view('posts/index')->with('posts', $posts);

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('http://localhost/lsapp/public/post')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post =  Post::find($id);
       return view('posts/show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $post =  Post::find($id);
=======
<<<<<<< HEAD
        $post = Post::find($id);
=======
        $post =  Post::find($id);
>>>>>>> 1508acf5c8e0ba9bd57e33322ef9f6191bcda6dd
>>>>>>> parent of 59046c9... Revert "update"
        return view('posts/edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
<<<<<<< HEAD

=======
<<<<<<< HEAD
        
        // Create Post
=======

>>>>>>> 1508acf5c8e0ba9bd57e33322ef9f6191bcda6dd
>>>>>>> parent of 59046c9... Revert "update"
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
<<<<<<< HEAD

        return redirect('http://localhost/lsapp/public/post')->with('success','Post Updated');
=======
<<<<<<< HEAD
        
        return redirect('/post')->with('success','Post Updated!!');
=======

        return redirect('http://localhost/lsapp/public/post')->with('success','Post Updated');
>>>>>>> 1508acf5c8e0ba9bd57e33322ef9f6191bcda6dd
>>>>>>> parent of 59046c9... Revert "update"
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return redirect('/post')->with('success','Post Removed');
=======
>>>>>>> parent of 59046c9... Revert "update"
        return redirect('http://localhost/lsapp/public/post')->with('success', 'Post Removed!!');
    }

    public function testing(){
        $post = Post::find(1);
        return $post;
<<<<<<< HEAD
=======
>>>>>>> 1508acf5c8e0ba9bd57e33322ef9f6191bcda6dd
>>>>>>> parent of 59046c9... Revert "update"
    }
}
