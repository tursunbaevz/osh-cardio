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
            $image_posts = $request->file('feautured_image');
            $image_news = $request->file('feautured_image');

            $filename_posts = time() . '.' . $image_posts->getClientOriginalExtension();
            $filename_news = time() . '.' . $image_news->getClientOriginalExtension();

            $location_posts = public_path('img/thumbnail/' . $filename_posts);
            $location_news = public_path('img/thumbnail/news/' . $filename_news);

            Image::make($image_posts)->fit(200, 278)->save($location_posts);
            Image::make($image_news)->fit(286, 180)->save($location_news);

            $post->image = $filename_posts;
            $post->imageNews = $filename_news;
        }

        $post->save();

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
            unlink(public_path('img/thumbnail/' . $post->image));
            unlink(public_path('img/thumbnail/news/' . $post->imageNews));
            $post->delete();
        }
    }

}


/* public function fileUpload(Request $request){
    if($request->hasFile('photo')){
        $photo = $request->file('photo');
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->resize(300, 300)->save( public_path('/uploads/consultants/images/' . $filename ) );

        DB::table('consultants')
            ->where('photo', $photo)
            ->update(['photo' => $filename]);
    }
} */