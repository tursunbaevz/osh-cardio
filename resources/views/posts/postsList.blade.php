@extends('layouts.master')

@section('content')
	@include ('layouts.nav')
	
	<div class="page-header  page-header-small">
		<div class="page-header-image" style="background-image: url('img/photo.jpg');"></div>
        <div class="content-center">
            <h1 class="title">Новости</h1>
        </div>
	</div>

	<div class="container" style="margin-top: 80px">
	 <div class="row">

	   @foreach($posts as $post)
		
		<div class="col-md-9" style="margin: auto;">
		  <div class="card-1 flex-md-row mb-4 h-md-250 card-raised">
		    <div class="card-body-1 d-flex flex-column-1 align-items-start">
		      <strong class="d-inline-block mb-2 text-primary">World</strong>
		      <h3 class="mb-0">
		        <a class="text-dark" href="/posts/{{$post->id}}">{!! str_limit($post->title, 50) !!}</a>
		      </h3>
		      <div class="mb-1 text-muted">{{ ($post->created_at)->diffForHumans() }}</div>
		      <p class="card-text mb-auto">{!! str_limit(strip_tags($post->body), 180) !!}</p>
		      <a href="/posts/{{$post->id}}">Читать дальше</a>
		    </div>
		    <img class="card-img-right flex-auto d-none d-md-block" src=" {{asset('img/thumbnail/grid/' . $post->imageGrid)}} ">
		  </div>
		</div>

	   @endforeach
	 </div>
	</div>


	<div class="pagination" style="margin: 50px auto;">
		{{$posts->links()}}	
	</div>

@endsection