@extends('adminLayouts.admin_master')


@section('content')
<div class="col" style="margin: auto; margin-bottom: 50px;">

	<form method="POST" action="{{action('Adminpanel\AlbumsController@update', $album)}}" enctype="multipart/form-data">

		  {{csrf_field()}}

		  <div class="form-group">
		    <br>
		    <input name="name" value="{{$album->name}}" type="text" class="form-control" placeholder="Введите заголовок">
		  </div>
		
		  <textarea name="description"  cols="30" rows="10" class="form-control">{{ $album->description }}</textarea><br>

		  <label for="feautured_image">Превью</label> <br>
		  <input type="file" value="{{$album->preview}}" name="preview" id="feautured_image" class="btn btn-success"><br><br>
		  <img id="album-preview" class="thumbnail" src="/storage/albums_preview/{{ $album->preview }}" alt="{{ $album->name }}"><br><br>
		  <button type="submit" class="btn btn-primary">Редактировать</button>


	</form>
</div>


@endsection