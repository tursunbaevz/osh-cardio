@extends('adminLayouts.admin_master')

@section('content')
	<div class="col" style="margin: auto;">
	<form method="POST" action="/adminpanel/dashboard/posts">

	  {{csrf_field()}}

	  <div class="form-group">
	    <br>
	    <input name="title" type="text" class="form-control" placeholder="Введите заголовок">
	  </div>
	
	  <textarea  id="editor1" name="body" cols="30" rows="10" class="form-control"></textarea><br>

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

	</form><br><br>

	<form action="{{ URL::to('/adminpanel/dashboard/posts/upload') }}" method="post" enctype="multipart/form-data">
		<label>Select image to upload:</label>
	    <input type="file" name="file" id="file">
	    <input type="submit" value="Upload" name="submit">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
	</form>

	</div>
	
@endsection