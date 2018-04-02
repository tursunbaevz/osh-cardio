@extends('layouts.master')

@section('content')
@include ('layouts.navForPosts')
	<div class="container">
		<div class="row">
			<div class="col-9" style="margin:auto; margin-top: 100px;">

			@foreach($posts as $post)
				<a href="/posts/{{$post->id}}" style="color: #000">
					<h3>{{$post->title}}</h3>
				</a>
				 Дата: <span>{{ ($post->created_at)->diffForHumans() }}</span>
				<p>{!! str_limit($post->body, 500) !!}</p>
			@endforeach
				<div class="pagination" style="margin: 50px auto;">
					{{$posts->links()}}	
				</div>
			</div>
		</div>
	</div>
	
@endsection
