<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Main;
use App\Post;
use Carbon\Carbon;

class MainController extends Controller
{

<<<<<<< HEAD
	public function test(){
		return view('test');
	}

=======
>>>>>>> parent of 6fe0ee6... Revert "Adding thubnails "
	public function index(){
		return view('index');
	}

	public function postsList(){
		$posts = Post::orderBy('created_at', 'DESC')->paginate(5);
		return view('posts.postsList', compact('posts'));
	}

	public function show($id){
		$show = Post::find($id);
		return view('posts.show', compact('show'));
	}

<<<<<<< HEAD

=======
	public function postgrid(){
		$posts = Post::orderBy('created_at', 'DESC')->paginate(5);
		return view('posts.gridTest', compact('posts'));
	}
>>>>>>> parent of 6fe0ee6... Revert "Adding thubnails "

}

