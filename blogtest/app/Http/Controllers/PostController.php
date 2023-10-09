<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Post::create([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'description'=>$request->description

        ]);
        return back();
    }

    public function show($postid){
        $post=Post::findOrFail($postid);
        return view('posts.show',compact('post'));
    }

    public function edit($postid)
    {
        $post=Post::findOrFail($postid);
        
        return view('posts.edit',compact('post'));
    }
    public function update($postid,Request $request)
    {
        $post=Post::findOrFail($postid)->update($request->all());
        return back();
    }
}
