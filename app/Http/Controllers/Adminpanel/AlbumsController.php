<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Album;

class AlbumsController extends Controller
{
    public function index() {
    	$albums = Album::with('Photos')->get();
    	return view('admin/albums.index')->with('albums', $albums);
    }


    public function show($id){
    	$album = Album::with('Photos')->find($id);
    	return view('admin/albums.show')->with('album', $album);
    }


    public function create() {
    	return view('admin/albums.create');
    }

     public function store(Request $request) {
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
}
