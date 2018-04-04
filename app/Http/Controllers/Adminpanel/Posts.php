<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Post;
use Image;

class Posts extends Controller
{
     public function index(){
        $posts = Post::all();
        return view('admin/posts.index', compact('posts'));
     }

     public function create(){
      return view('admin/posts.create');
     }








     public function store(Request $request){

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);


        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        if($request->hasFile('feautured_image')){
            $image = $request->file('feautured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/thumbnail/' . $filename);
            Image::make($image)->fit(200, 250)->save($location);

            $post->image = $filename;
        }

        $post->save();

        //Post::create(request(['title','body']));


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

    public function destroy(Request $request){

        if(isset($request->id)){
            $post = Post::findOrFail($request->id);
            $post->delete();
        }
    }

}