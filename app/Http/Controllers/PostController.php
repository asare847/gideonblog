<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Post::take(5)->latest()->get();
        $paginate = Post::take(5)->latest()->paginate(5);
        $footer_post = Post::take(5)->latest()->get();
        return view('blog.blog',['articles'=>$articles,'footer_post'=>$footer_post]);

    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
         $post = new Post;
         $post->title = $request->input('title');
         $post->slug = $request->input('slug');
         $post->body = $request->input('body');
         $post->save();
         return redirect('blog');
        }

    /**
     * Display the specified resource.
     *
     * @param  Post $article
     * @return \Illuminate\Http\Response
     */
    public function show(Post $article)
    { 
        return view('blog.article',['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
