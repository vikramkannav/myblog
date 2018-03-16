<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use View;
use HTML;
use Illuminate\Support\Facades\Input;
use App\User;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user_id = Auth::user()->id;
       $posts = Post::where('created_by',$user_id)->get();
       return view('Posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return View::make('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $posts = new Post($request->all());
      $posts->created_by=Auth::user()->id;
      $posts->save();
      if($posts->errors())
          return redirect()->back()->withInput()->withErrors($posts->errors()->toArray());
      return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return View::make('Posts.show')->with('post'.$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return View::make('Posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $posts = Post::find($id);
        $posts->update($input);
        if($posts->errors())
            return redirect()->back()->withInput()->withErrors($posts->errors()->toArray());

        return redirect('home');
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

    public function allPost()
    {
        $posts = Post::all()->where('status','publish');
        return view('Posts.index')->with('posts',$posts);
    }


}
