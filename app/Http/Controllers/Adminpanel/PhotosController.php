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

	   // multiple upload image to file	

	 	if ($request->hasFile('image')) {
			$files = $request->file('image');
			foreach($files as $file){
			    $extension = $file->getClientOriginalExtension();
			    $fileName = str_random(5)."-".date('his')."-".str_random(3).".".$extension;
			    $folderpath  = 'storage/photos' . $request->input('album_id');
			    $file->move($folderpath , $fileName);
				
				// upload photos to data base
			    $file = new Photo;
				$file->album_id = $request->input('album_id');
				$file->image = $fileName;
		        $file->save();
			}
		}
		

			session()->flash('notifcreate', 'Фотография успешно добавлена!');

		
		// success message

		

		
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
