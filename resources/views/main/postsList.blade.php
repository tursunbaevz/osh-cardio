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
				<p>{!! str_limit($post->body, 180) !!}</p>	
			@endforeach
			</div>
		</div>
	</div>
@endsection