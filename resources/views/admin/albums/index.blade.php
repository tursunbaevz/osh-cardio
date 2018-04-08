@extends('adminLayouts.admin_master')


@section('content')
	

	<div id="albums">
		<div class="row text-center">
			@foreach($albums as $album)
			<div class="col-4">
				<div class="album-block">
					<a id="trash-album" class="deletebtn" href="javascript:void(0)" p-data="{{$album->id}}"><i class="fas fa-trash"></i></a>

					<a href="/adminpanel/dashboard/albums/{{ $album->id }}">
						<img id="album-preview" class="thumbnail" src="/storage/albums_preview/{{ $album->preview }}" alt="{{ $album->name }}">
					</a>	

					<br>
					<h4>{{ $album->name }}</h4>
				</div>
			</div>		
			@endforeach	
		</div>
	</div>

	
@endsection