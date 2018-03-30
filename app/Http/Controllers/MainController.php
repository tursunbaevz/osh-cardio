<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Main;
use App\Post;

class MainController extends Controller
{


	public function index(){
		return view('index');
	}

	public function postsList(){
		$posts = Post::all();
		return view('posts.postsList', compact('posts'));
	}

	public function show($id){
		$show = Post::find($id);
		return view('posts.show', compact('show'));
	}



}

