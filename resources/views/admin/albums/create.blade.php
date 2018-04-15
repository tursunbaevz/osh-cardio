@extends('adminLayouts.admin_master')

@section('content')

	<div class="col" style="margin: auto; margin-bottom: 50px;">
		<form method="POST" action="{{action('Adminpanel\AlbumsController@store')}}" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<br>
				<input name="name" type="text" class="form-control" placeholder="Введите заголовок">
			</div>
			<textarea name="description"  cols="30" rows="10" class="form-control"></textarea><br>
			<div class="fileinput fileinput-new text-center" data-provides="fileinput">
				<div class="fileinput-new thumbnail img-raised">
					<img  src="/img/image_placeholder.jpg" alt="...">
				</div>
				<div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
				<div>
					<span class="btn btn-raised btn-round btn-default btn-file">
						<span class="fileinput-new">выбрать картинку</span>
						<span class="fileinput-exists">изменить</span>
						<input type="file"  name="preview">
					</span>

					<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="now-ui-icons ui-1_simple-remove"></i> удалить</a>
				</div>
			</div> 
			<br>
			<div class="text-center">
				<button type="submit" class="btn btn-success btn-lg">Создать Альбом</button>
			</div>
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
	</div>

@endsection




