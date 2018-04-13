@extends('layouts.master')

@section('content')
	
	@include ('layouts.navForPosts')
	
	<div class="container" style="margin-top: 80px">

	<div class="row">



@foreach($albums as $album)
	<div class="col-md-4">
		<div class="card card-pricing card-background card-raised" style="background-image: url({{asset('/storage/albums_preview/' . $album->preview)}});">
			<div class="card-body">
				<div class="more-services" style="margin-top: 100px;">

				  <h3 class="category text-info center-block-btn" style ="text-transform: uppercase;">
					{{-- {!! str_limit($service->title, 35) !!} --}}
					{{ $album->name }}
				  </h3><br><br>
				</div>
			</div>
		</div>
	</div>
@endforeach




{{-- 		<div id="albums">
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
		</div> --}}


	</div>
	</div> 







@endsection