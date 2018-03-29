@extends('adminLayouts.admin_master')

@section('content')

	<div class="col-8" style="margin: auto;">
	<form method="POST" action="/adminpanel/dashboard/posts">

	  {{csrf_field()}}

	  <div class="form-group">
	    <label>Заголовок</label>
	    <input name="title" type="text" class="form-control" placeholder="Введите заголовок">
	  </div>
	
	  <textarea  id="editor1" name="body" cols="30" rows="10" class="form-control"></textarea><br>

	  <button type="submit" class="btn btn-primary">Создать</button>
	</form>
	</div>
	
@endsection