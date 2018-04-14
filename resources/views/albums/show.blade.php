@extends('layouts.master')

@section('content')
	<div id="wrapper-1">
	<div class="gallery-test">
	
		@foreach($photos->photos as $photo)

		<a class="gallery-item" href="#" style="background-image: url('/storage/photos{{ $photo->album_id }}/{{ $photo->image }}" alt="image');">

			<img src="/storage/photos{{ $photo->album_id }}/{{ $photo->image }}" alt="image">
		</a>

		@endforeach

	</div>
	</div>
@endsection