<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id){
    	return view('admin/photos.create')->with('album_id', $album_id);
    }


	public function store(Request $request) {
		$this->validate($request, [
			'image' => 'image|max:1999'
		]);
		//get file name  with extention
		$filenameWithExt = $request->file('image')->getClientOriginalName();
		// get just the filename
		$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
		// get extension 
		$extension = $request->file('image')->getClientOriginalExtension();
		//create new filename
		$filenameToStore = $filename.'_'.time().'.'.$extension;
		// upload image
		$path = $request->file('image')->storeAs('storage/photos' . $request->input('album_id'), $filenameToStore);

		// upload photos

		$photo = new Photo;

		$photo->album_id = $request->input('album_id');
		$photo->image = $filenameToStore; 
		$photo->size = $request->file('image')->getClientSize();
		$photo->save();

		return redirect('/adminpanel/dashboard/albums/' . $request->input('album_id'))->with('success', 'Фотография успешно загружена!');
	}





    public function destroy(Request $request){
 
        if(isset($request->id)){
            $photo = Photo::findOrFail($request->id);
    		if(Storage::delete('storage/photos' . $photo->album_id . '/' . $photo->image)){
	    		$photo->delete();
    		}
    	}
    	
	}


}
