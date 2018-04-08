@extends('adminLayouts.admin_master')


@section('content')



{{ Form::open(['action' => 'Adminpanel\AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
<h3>Создание Альбома</h3>
<div class="form-group">
	{{ Form::text('name', '', ['placeholder' => 'Наименование Альбома']) }}
</div>

<div class="form-group">
	{{ Form::textarea('description', '', ['placeholder' => 'Описание Альбома'])}}
</div>

<div class="form-group">
	{{ Form::file('preview', array('class' => 'btn btn-info')) }}
</div>

<div class="form-group">
	{{ Form::submit('создать альбом', array('class' => 'btn btn-success')) }}
</div>

{!! Form::close() !!}

@endsection