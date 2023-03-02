<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    function getAllPosts(){
        $Posts = Post::paginate();
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
        // $userName=Auth::user()->name;
        return view('post.create' );
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
        $post=Post::where('Id',$id);
        $post->update($request->except(['_token','_method']));
        return redirect()->route('post.index');
    }
    function destroy($id)
    {
        Post::where('Id',$id)->delete();
        return redirect()->route('post.index');
    }

}
