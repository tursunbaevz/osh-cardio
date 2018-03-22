<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class Posts extends Controller
{
     public function index() {
     	$posts = Post::all();
        return view('admin/posts.index', compact('posts'));
     }
}
