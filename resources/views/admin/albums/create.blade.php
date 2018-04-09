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

		<label for="feautured_image">Превью</label> <br>
		<input  type="file"  name="preview" id="feautured_image" class="btn btn-success"><br><br>
	    <button type="submit" class="btn btn-primary">создать</button>
		
		



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
@section('script')
	<script>
	if (!$('input[type=file]').change()) {
		$('input[type=file]').change(function(e){
		  $in=$(this);
		  $in.next().html($in.val());
		});
		alert('не забудь');
	}   
		
	</script>
@endsection




