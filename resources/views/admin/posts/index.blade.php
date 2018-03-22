@extends('adminLayouts.admin_master')

@section('content')

	
	@foreach($posts as $post)

		{{ $post->title }}
		{{ $post->body }}

	@endforeach


@endsection
