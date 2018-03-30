@extends('adminLayouts.admin_master')

@section('content')

	@foreach($posts as $post)

		<div class="col-8" style="margin:auto;">
			<h3>{{$post->title}}</h3>
			<p>{!! str_limit($post->body, 180) !!}</p>
		</div>

		<div class="col-2">
		<div class="btn-group-vertical btn-center">
			<button type="button" class="btn btn-primary btn-sm" style="margin-bottom: 5px">Редактировать</button>
		    {{ Form::open(array('url' => '/adminpanel/dashboard/posts/' . $post->id)) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Удалить этот пост', array('class' => 'btn btn-danger btn-sm')) }}
                {{ Form::close() }}
		</div>
		</div>
	@endforeach
@endsection


