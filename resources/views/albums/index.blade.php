@extends('layouts.master')

@section('content')
	
	@include ('layouts.navForPosts')
	
	<div class="container" style="margin-top: 80px">



		<div id="albums">
			<div class="row text-center">
				@foreach($albums as $album)
				<div class="col">
					<div class="album-card" style="width: 20rem; height: 20rem;">
					  	<a href="/albums/{{ $album->id }}">
							<img id="album-preview" class="thumbnail" src="/storage/albums_preview/{{ $album->preview }}" alt="{{ $album->name }}">
						</a>
					</div>	
				</div>
				@endforeach	
			</div>
		</div>



	</div> 


@endsection