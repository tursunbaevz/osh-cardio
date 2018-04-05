@extends('layouts.postGrid')

@section('content')

	
	@foreach($posts as $post)
		
	<div class="col-md-9">
	  <div class="card flex-md-row mb-4 box-shadow h-md-250">

	    <div class="card-body d-flex flex-column align-items-start">

	      <strong class="d-inline-block mb-2 text-primary">World</strong>

	      <h3 class="mb-0">
	        <a class="text-dark" href="/posts/{{$post->id}}">{!! str_limit($post->title, 50) !!}</a>
	      </h3>

	      <div class="mb-1 text-muted">{{ ($post->created_at)->diffForHumans() }}</div>
	      <p class="card-text mb-auto">{!! str_limit($post->body, 180) !!}</p>
	      <a href="/posts/{{$post->id}}">Читать дальше</a>

	    </div>

		<a href="/posts/{{$post->id}}">
	    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" src=" {{asset('img/thumbnail/grid/' . $post->imageGrid)}} "></a>
	    

	  </div>
	</div>

	@endforeach

	<div class="pagination" style="margin: 50px auto;">
		{{$posts->links()}}	
	</div>

@endsection