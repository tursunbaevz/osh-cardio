@extends('layouts.master')

@section('content')

	@include('layouts.navForPosts')

	<div class="container" style="margin-top: 80px">
	 <div class="row">

	   @foreach($services as $service)
		
		<div class="col-md-9" style="margin: auto;">
		  <div class="card-1 flex-md-row mb-4 h-md-250 card-raised">
		    <div class="card-body-1 d-flex flex-column-1 align-items-start">
		      <strong class="d-inline-block mb-2 text-primary">World</strong>
		      <h3 class="mb-0">
		        <a class="text-dark" href="/services/{{$service->id}}">{!! str_limit($service->title, 50) !!}</a>
		      </h3>
		      <div class="mb-1 text-muted">{{ ($service->created_at)->diffForHumans() }}</div>
		      <p class="card-text mb-auto">{!! str_limit($service->body, 180) !!}</p>
		      <a href="/services/{{$service->id}}">Подробнее</a>
		    </div>
		    {{-- <img class="card-img-right flex-auto d-none d-md-block" src=" {{asset('img/thumbnail/grid/' . $post->imageGrid)}} "> --}}
		  </div>
		</div>

	   @endforeach
	 </div>
	</div>


	<div class="pagination" style="margin: 50px auto;">
		{{$services->links()}}	
	</div>

@endsection