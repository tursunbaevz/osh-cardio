<?php

// path to Adminpanel
namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
// for calling photo model 
use App\Photo;

class PhotosController extends Controller
{	
	// path for creating photo with album_id
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

		// redirect after creating
		return redirect('/adminpanel/dashboard/albums/' . $request->input('album_id'))->with('success', 'Фотография успешно загружена!');
	}




	// удаление фото
    public function destroy(Request $request){
 
        if(isset($request->id)){
        	// находит id фото
            $photo = Photo::findOrFail($request->id);
            // проверка если удалил файл
    		if(Storage::delete('storage/photos' . $photo->album_id . '/' . $photo->image)){
    			// тогда удали фото из базы
	    		$photo->delete();
    		}
    	}
    	
	}


}
