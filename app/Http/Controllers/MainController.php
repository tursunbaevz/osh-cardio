<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Main;
use App\Post;
use App\Service;
use Carbon\Carbon;

class MainController extends Controller
{

	public function test(){
		return view('test');
	}

	public function index(){
		$posts = Post::orderBy('id', 'desc')->take(8)->get();
		return view('index', compact('posts'));

	}

	public function postsList(){
		$posts = Post::orderBy('created_at', 'DESC')->paginate(5);
		return view('posts.postsList', compact('posts'));
	}

	public function show($id){
		$post = Post::find($id);
		return view('posts.show', compact('post'));
	}

	public function servicesList(){
		$services = Service::orderBy('created_at', 'DESC')->paginate(5);
		return view('services.servicesList', compact('services'));
	}

	public function servicesShow($id){
		$services = Service::find($id);
		return view('services.servicesShow', compact('services'));
	}


}

