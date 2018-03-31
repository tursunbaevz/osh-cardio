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

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

     	Post::create(request(['title', 'body']));
     	return redirect('/adminpanel/dashboard/posts');
     }

     public function edit($id)
     {

        $post = Post::find($id);
        return view('admin/posts.edit', compact('post'));

     }


    public function update(Request $request, $id)
     {  
        $post = Post::find($id);
        
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();
        return redirect('/adminpanel/dashboard/posts')->with('success','Post has been updated');

     }

     public function destroy($id)
     {
        $post = Post::find($id);
        $post->delete();

        return redirect('/adminpanel/dashboard/posts');
     }
}
