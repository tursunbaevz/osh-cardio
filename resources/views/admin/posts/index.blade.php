@extends('adminLayouts.admin_master')

@section('content')
@foreach($posts as $post)
<div class="col-8" style="margin:auto;">
	<h3>{{$post->title}}</h3>
	<p>{{$post->body}}</p>
</div>

<div class="col-2">
<div class="btn-group-vertical btn-center">
	<button type="button" class="btn btn-primary btn-sm" style="margin-bottom: 5px">Редактировать</button>

	<button type="button" class="btn btn-danger btn-sm">Удалить</button>
</div>
</div>	
@endforeach
@endsection

