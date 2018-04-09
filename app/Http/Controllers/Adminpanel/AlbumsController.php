<?php

// path to Adminpanel
namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
// for calling album model 
use App\Album;
// this for using FILE path
use File;


class AlbumsController extends Controller
{   
    // return albums to  main page
    public function index() {
    	$albums = Album::with('Photos')->get();
    	return view('admin/albums.index')->with('albums', $albums);
    }

    // return album and photos to show page
    public function show($id){
    	$album = Album::with('Photos')->find($id);
    	return view('admin/albums.show')->with('album', $album);
    }

    // path for create album
    public function create() {
    	return view('admin/albums.create');
    }

     public function store(Request $request) {
        // validation
    	$this->validate($request, [
    		'name' => 'required',
    		'preview' => 'image|max:1999'
    	]);
    	//get file name  with extention
    	$filenameWithExt = $request->file('preview')->getClientOriginalName();
    	// get just the filename
    	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    	// get extension 
    	$extension = $request->file('preview')->getClientOriginalExtension();
    	//create new filename
		$filenameToStore = $filename.'_'.time().'.'.$extension;
    	// upload image
    	$path = $request->file('preview')->storeAs('storage/albums_preview', $filenameToStore);

    	// create album

    	$album = new Album;

    	$album->name = $request->input('name');
    	$album->description = $request->input('description');
    	$album->preview = $filenameToStore; 
    	$album->save();

    	return redirect('/adminpanel/dashboard/albums')->with('success', 'Album Created!');
    	
    }


    public function edit($id){
        $album = Album::with('Photos')->find($id);
        return view('admin/albums.edit', compact('album'));
    }

    public function update(Request $request, $id) {
        // find id
        $album = Album::with('Photos')->find($id);
    


        $album->name = $request->input('name');
        $album->description = $request->input('description');

        $this->validate($request, [
            'name' => 'required',
            'preview' => 'image|max:1999'
        ]);

        //get file name  with extention
        $filenameWithExt = $request->file('preview')->getClientOriginalName();
        // get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // get extension 
        $extension = $request->file('preview')->getClientOriginalExtension();
        //create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // upload image
        $path = $request->file('preview')->storeAs('storage/albums_preview', $filenameToStore);

            // проверка на существование 
        if ( File::exists('storage/albums_preview/' .  $album->preview)) {
            // удаляет фото в файле
            File::delete('storage/albums_preview/' .  $album->preview);
        }
            

        // update album
        // заменяет фото в базе
        $album->preview = $filenameToStore; 
        $album->save();

        return redirect('/adminpanel/dashboard/albums/')->with('success', 'Вы успешно обновили альбом!');
        
    }


    // удалние целого альбома
    public function destroy(Request $request){
        // проверка на реквест id
        if(isset($request->id)){

            $album = Album::findOrFail($request->id);
            // проверка на существование превьюшки альбома 
            if(File::exists('storage/albums_preview' . '/' . $album->preview))
            {
                // удаляет папку и фотки
                foreach($album->photos as $photo){
                    File::deleteDirectory('storage/photos' . $photo->album_id);
                }
                // удаляет превьюшку альбома 
                File::delete('storage/albums_preview' . '/' . $album->preview);
                // удаляет альбом с базы и привязанные фотки
                $album->delete();
            }
        }
        
    }
}
