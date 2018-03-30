@extends('layouts.master')

@section('content')
@include ('layouts.navForPosts')

<div class="container">
	<div class="row">
		<div class="col-9" style="margin:auto; margin-top: 100px;">
			<h3>{{$show->title}}</h3>
			<p>{!! $show->body !!}</p>
			
		</div>
	</div>
</div>


@endsection