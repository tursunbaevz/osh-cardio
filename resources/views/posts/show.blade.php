@extends('layouts.master')

@section('content')
@include ('layouts.navForPosts')

<div class="container">
	<div class="row">
		<div class="col-9" style="margin:auto; margin-top: 100px;">
			
			<img src=" {{asset('img/thumbnail/'.$post->image)}} "><br><br>
			<h3>{{$post->title}}</h3>
			<p>{!! $post->body !!}</p>
			
		</div>
	</div>
</div>


@endsection