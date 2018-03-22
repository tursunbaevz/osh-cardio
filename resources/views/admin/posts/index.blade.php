@extends('adminLayouts.admin_master')





@section('content')

<div class="container">
<div class="row">
	<div class="col-4"></div>
	<div class="col-8">
		@foreach($posts as $post)
			<div class="row">
				<h1>{{ $post->title }}</h1><br>
				<h6>{{ $post->body }}</h6>
			</div>
		@endforeach
	</div>
</div>
</div>

@endsection
