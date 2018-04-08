@extends('adminLayouts.admin_master')

@section('content')
{{ Form::open(['action' => 'Adminpanel\PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
<h3>Добавление фотографий</h3>
<div class="form-group">
	{{ Form::file('image', array('class' => 'btn btn-info')) }}
</div>
<div class="form-group">
	{{ Form::hidden('album_id', $album_id, array('class' => 'btn btn-info')) }}
</div>
<div class="form-group">
	{{ Form::submit('создать альбом', array('class' => 'btn btn-success')) }}
</div>

{!! Form::close() !!}
@endsection