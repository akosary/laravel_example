<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TestController extends Controller
{
    function getAllPosts(){
        $Posts = Post::get();
        dd($Posts);
    }
}
