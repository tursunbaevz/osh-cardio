@extends('layouts.master')

@section('content')
@include ('layouts.navForPosts')
	<div id="wrapper-1">
	<div class="gallery-photos">
	
		@foreach($photos->photos as $photo)

		<a class="gallery-item" href="/storage/photos{{ $photo->album_id }}/{{ $photo->image }}" style="background-image: url('/storage/photos{{ $photo->album_id }}/{{ $photo->image }}" alt="image');">

			<img src="/storage/photos{{ $photo->album_id }}/{{ $photo->image }}" alt="image">
		</a>

		@endforeach

	</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function() {
		$('.gallery-photos').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
		});
	});
	</script>

@endsection

@section('script')

<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="/css/magnific-popup.css">

<!-- Magnific Popup core JS file -->
<script src="/js/magnific-popup.js"></script>

@endsection
