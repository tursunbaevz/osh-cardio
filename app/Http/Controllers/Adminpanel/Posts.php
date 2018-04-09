<?php
 
namespace App\Http\Controllers\Adminpanel;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Post;
use Image;
use File;
 
class Posts extends Controller
{   
     public function index(){
        $posts = Post::all();
        return view('admin/posts.index', compact('posts'));
     }
 
     public function create(){
      return view('admin/posts.create');
     }
 
                                /*------------- STORE -------------*/
 
     public function store(Request $request){
 
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
 
 
        $post = new Post;
 
        $post->title = $request->title;
        $post->body = $request->body;
 
        if($request->hasFile('feautured_image')){
            $image_post = $request->file('feautured_image');
            $image_grid = $request->file('feautured_image');
            $image_news = $request->file('feautured_image');
 
            $filename_post = time() . '.' . $image_post->getClientOriginalExtension();
            $filename_grid = time() . '.' . $image_grid->getClientOriginalExtension();
            $filename_news = time() . '.' . $image_news->getClientOriginalExtension();

            $location_post = public_path('img/thumbnail/' . $filename_post);
            $location_grid = public_path('img/thumbnail/grid/' . $filename_grid);
            $location_news = public_path('img/thumbnail/news/' . $filename_news);
 
            Image::make($image_post)->fit(1920, 350)->save($location_post);
            Image::make($image_grid)->fit(200, 278)->save($location_grid);
            Image::make($image_news)->fit(286, 180)->save($location_news);
 
            $post->image = $filename_post;
            $post->imageGrid = $filename_grid;
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

                            /*------------- UPDATE -------------*/
 
    public function update(Request $request, $id)
     {  
        $post = Post::find($id);
        
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
 
        
        $post->title = $request->get('title');
        $post->body = $request->get('body');
 
        //Update image
        if($request->hasFile('feautured_image')){
            $image_post = $request->file('feautured_image');
            $image_grid = $request->file('feautured_image');
            $image_news = $request->file('feautured_image');
 
            $filename_post = time() . '.' . $image_post->getClientOriginalExtension();
            $filename_grid = time() . '.' . $image_grid->getClientOriginalExtension();
            $filename_news = time() . '.' . $image_news->getClientOriginalExtension();
 
            $location_post = public_path('img/thumbnail/' . $filename_post);
            $location_grid = public_path('img/thumbnail/grid/' . $filename_grid);
            $location_news = public_path('img/thumbnail/news/' . $filename_news);

             if(File::exists('img/thumbnail/' . $post->image)){
 
                    File::delete('img/thumbnail/' . $post->image);
                    File::delete('img/thumbnail/grid/' . $post->imageGrid);
                    File::delete('img/thumbnail/news/' . $post->imageNews);
 
                }else{
                    $post->image = $filename_post;
                    $post->imageGrid = $filename_grid;
                    $post->imageNews = $filename_news;
                }
 
            $post->image = $filename_post;
            $post->imageGrid = $filename_grid;
            $post->imageNews = $filename_news;
 
            Image::make($image_post)->fit(825, 350)->save($location_post);
            Image::make($image_grid)->fit(200, 278)->save($location_grid);
            Image::make($image_news)->fit(286, 180)->save($location_news);
 
        }

        $post->save();
        return redirect('/adminpanel/dashboard/posts')->with('success','Post has been updated');
 
     }
 
                            /*------------- DELETE -------------*/
 
    public function destroy(Request $request){
 
        if(isset($request->id)){
            $post = Post::findOrFail($request->id);

            if(File::exists('img/thumbnail/' . $post->image)){

                File::delete('img/thumbnail/' . $post->image);
                File::delete('img/thumbnail/grid/' . $post->imageGrid);
                File::delete('img/thumbnail/news/' . $post->imageNews);

                $post->delete();
            }

             $post->delete();
        }
    
    }
    
}