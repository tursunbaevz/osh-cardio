@extends('adminLayouts.admin_master')

@section('content')
	<div class="col" style="margin: auto;">
		<form method="POST" action="/adminpanel/dashboard/posts" enctype="multipart/form-data">

		  {{csrf_field()}}

		  <div class="form-group">
		    <br>
		    <input name="title" type="text" class="form-control" placeholder="Введите заголовок">
		  </div>
		
		  <textarea  id="editor1" name="body" cols="30" rows="10" class="form-control"></textarea><br>

		  <label for="feautured_image">Картинка поста</label> <br>
		  <input type="file" name="feautured_image" id="feautured_image"><br><br>
		  <button type="submit" class="btn btn-primary">Создать</button>


		@if(count($errors))
			<div class="form-group" style="margin-top: 20px; max-width: 400px;">
				<div class="alert alert-danger">	
					<ul>
						@foreach($errors->all() as $error)
							<li style="list-style-type: disc;"> {{$error}} </li>
						@endforeach
					</ul>
				</div>
			</div>
		@endif

		</form>
		
		{{--
		    {{!! Form::open(array('route' => 'post.store', 'data-parsley-validate' => 'files' => true)) !!}}
		  	{{ Form::label('feautured_image', 'Upload Feautured Image:') }}
		  	{{ Form::file('feautured_image') }}
			{{!! Form::close() !!}} 
		--}}

		<br><br>

	</div>
@endsection
@section('ckeditor')
	<script src="{{ asset('/js/ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8" ></script>
	<script type="text/javascript" src="/js/ckeditor.js"></script>	
@endsection




