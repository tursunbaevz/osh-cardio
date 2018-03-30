@extends('layouts.layoutForPosts')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-9" style="margin:auto; margin-top: 100px;">
		
			<h3>{{$eachPost->title}}</h3>
			<p>{{$eachPost->body}}</p>
			
		</div>
	</div>
</div>


@endsection