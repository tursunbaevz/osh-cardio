@extends('adminLayouts.admin_master')


@section('content')
	
	<h1>{{ $album->name }}</h1>
	<a class="btn btn-primary" href="{{ '/adminpanel/dashboard/albums' }}">назад</a>
	<a class="btn btn-info" href="/adminpanel/dashboard/photos/create/{{ $album->id }}">создать фото для альбома</a>
	<p style="margin-top: 10px;">{{ $album->description }}</p>
	<hr>
	<div class="row text-center">	
		@foreach($album->photos as $photo )
			<div class="col-xs-6">
				<div class="photo-block">
					<a class="deletebtn" href="javascript:void(0)" p-data="{{$photo->id}}"><i class="fas fa-times"></i></a>
					<img id="photo-image" class="thumbnail" src="/storage/photos{{ $photo->album_id }}/{{ $photo->image }}" alt="image">
				</div>
			</div>		
		@endforeach
	</div>

	

@endsection

@section('deletePhoto')


<script>
	$(document).on('click', '.deletebtn', function(ev){
	    var photoid = $(this).attr("p-data");
	    var clickedObj = $(this).parent().parent();
	    if (confirm('Вы уверены?')) {	
		    $.ajax({
		        method: 'DELETE',
		        url: '{{ url('/adminpanel/dashboard/albums/photo')}}',
		        dataType: 'text',
		        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		        data: {id:photoid,"_token": "{{ csrf_token() }}"},

		        success: function (data) {
	  				$(clickedObj).fadeOut( "slow", function() {
	    				// удалено
	  				});
		        }
		    });  
		} 
	});

</script>

@endsection
