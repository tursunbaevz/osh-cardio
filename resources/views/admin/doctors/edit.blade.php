@extends('adminLayouts.admin_master')


@section('content')

	<div class="col" style="margin: auto; margin-bottom: 50px;">

	<form method="POST" action="{{action('Adminpanel\DoctorsController@update', $doctor)}}" enctype="multipart/form-data">

		{{csrf_field()}}

	  	<div class="form-group">
	    <br>
	    	<input name="name" value="{{$doctor->name}}" type="text" class="form-control" placeholder="Введите заголовок">
	  	</div>
		
		<textarea  id="editor1" name="body"  cols="30" rows="10" class="form-control">{{ $doctor->body }}</textarea><br>

		
		<div class="fileinput fileinput-new text-center" data-provides="fileinput">
		    <div class="fileinput-new thumbnail img-raised">
		        <img  src="/storage/doctors_image/{{ $doctor->doctors_image }}" alt="...">
			</div>
			<div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
		    <div>
		        <span class="btn btn-raised btn-round btn-default btn-file">
		            <span class="fileinput-new">выбрать картинку</span>
		            <span class="fileinput-exists">изменить</span>
		            <input type="file"  name="doctors_image">
		        </span>

		        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="now-ui-icons ui-1_simple-remove"></i> удалить</a>
		    </div>
		</div> 
		<br>
		<div class="text-center">
	    	<button type="submit" class="btn btn-success btn-lg">Создать</button>
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

@section('ckeditor')
	<script src="{{ asset('/js/ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8" ></script>
	<script type="text/javascript" src="/js/ckeditor.js"></script>	
@endsection
