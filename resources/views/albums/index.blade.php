@extends('layouts.master')

@section('content')
	
@include ('layouts.nav')

	<div class="page-header  page-header-small">
		<div class="page-header-image" style="background-image: url('img/photo.jpg');"></div>
        <div class="content-center">
            <h1 class="title">Галерея</h1>
        </div>
	</div>
	
	<div class="container" style="margin-top: 80px">
	<div class="row" style="margin-bottom: 80px">

	@foreach($albums as $album)

	<a href="albums/{{ $album->id }}">
	<div class="col-md-4" style="display: flex;">
		<div class="card-2 card--big">
		  <div class="card__image" style="background-image: url({{asset('/storage/albums_preview/' . $album->preview)}});"></div>
		  <h2 class="card__title">{!! str_limit($album->name, 35) !!}</h2>
		  <p class="card__text">{!! str_limit($album->description, 80) !!}</p>
		  <div class="card__action-bar">
		    <a href="albums/{{ $album->id }}" class="card__button" style="text-decoration: none;">ПОДРОБНЕЕ</a>
		  </div>
		</div>
	</div>
	</a>



	@endforeach	
	</div>
	</div>












@endsection