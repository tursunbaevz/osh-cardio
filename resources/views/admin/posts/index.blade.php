@extends('adminLayouts.admin_master')





@section('content')


<div class="row">
	<div class="col-4" style="max-width: 300px"></div>
	<div class="col-8" style="">
			<div class="row" style="margin-top: 20px">
			<div class="col">
				<button type="button" class="btn btn-success float-right">Новый пост</button>
			</div>
			</div>
		@foreach($posts as $post)
			<div class="col">
				<h1 style="position: relative; width: 100%">{{ $post->title }}</h1>
				<p style="position: relative; width: 100%">{{ $post->body }}</p>
			</div>
		@endforeach
	</div>
</div>


@endsection
