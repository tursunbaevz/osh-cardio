<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Carbon\Carbon;

class AlbumsController extends Controller
{
    public function index() {
    	$albums = Album::with('Photos')->get();
    	return view('albums.index')->with('albums', $albums);
    }


 	public function show($id){
    	$album = Album::with('Photos')->find($id);
    	return view('albums.show')->with('album', $album);
    }
}
