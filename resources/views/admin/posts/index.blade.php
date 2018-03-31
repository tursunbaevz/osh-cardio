@extends('adminLayouts.admin_master')

@section('content')
	<h1 class="title">Новости</h1>
	<div class="col-12">
		<div class="float-btn">
			<a href="{{'/adminpanel/dashboard/posts/create'}}">
		   <button type="button" class="float-right btn btn-success btn-lg pull-right">Новый пост</button></a>
		</div>
	</div>	

		

		@foreach($posts as $post)

			<div class="col-6 new-post-btn" style="margin:auto;"><br><br>
				<h3>{{$post->title}}</h3>
				<p>{!! str_limit($post->body, 180) !!}</p>
			</div>

			<div class="col-4">
				<div class="btn-group-vertical btn-center">
				
						{{--  edit  --}}
					 	{{ Form::open(array('url' => '/adminpanel/dashboard/posts/edit/' . $post->id)) }}
		                    {{ Form::hidden('_method', 'Post') }}
		                    {{ Form::submit('Редактировать', array('class' => 'btn btn-primary btn-sm')) }}
		                {{ Form::close() }}


		                {{-- delete --}}
				   		{{ Form::open(array('url' => '/adminpanel/dashboard/posts/' . $post->id)) }}
		                    {{ Form::hidden('_method', 'DELETE') }}
		                    {{ Form::submit('Удалить', array('class' => 'btn btn-danger btn-sm')) }}
		                {{ Form::close() }}
				</div>
			</div>

		@endforeach
	
	</div>
@endsection