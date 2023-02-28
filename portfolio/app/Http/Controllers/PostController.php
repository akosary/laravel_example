<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    function getAllPosts(){
        $Posts = Post::get();
        return view('allPosts' ,['Posts' => $Posts]);
        // dd($Posts);
    }

    function getPostById($id){
        // $Post = Post::find($id);
        $Post = Post::where('Id',$id)->first();
        return view('postDetails' ,['Post' => $Post]);
    }

    function create()
    {
        return view('post.create');
    }

    function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('post.index');
    }
    function update(Post $post)
    {
        return view('post.update',['Post'=>$post]);
    }
    function edit($id,Request $request)
    {
        // dd($request);
        $post = Post::find($id);
        // dd($request);
        $post->update($request->except(['_token','_method','Id']));

        // $post->update($request->all());
        return redirect()->route('post.index');
    }
    function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

}
