<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class Posts extends Controller
{
     public function index(){
     	$posts = Post::all();
        return view('admin/posts.index', compact('posts'));
     }

     public function create(){
     	return view('admin/posts.create');
     }

     public function store(){
     	Post::create(request(['title', 'body']));
     	return redirect('/adminpanel/dashboard/posts');
     }


     public function destroy($id)
     {
        $post = Post::find($id);
        $post->delete();

        return redirect('/adminpanel/dashboard/posts');
     }
}
