@extends('adminLayouts.admin_master')


@section('content')
	

	<a id="btncreate-album" class="btn btn-info" href="/adminpanel/dashboard/albums/create/"><i class="fas fa-plus"></i> Новый Альбом</a>
		<h1 class="title">Галерея</h1>
	<div id="albums" class="text-center">

		

		<div class="row">

			@foreach($albums as $album)
			<div class="col-md-6">
				<div class="album-block">
					
						<a id="edit-album" href="{{ action('Adminpanel\AlbumsController@edit', $album->id) }}"><i class="fas fa-edit btn btn-success"></i></a>

						<a id="trash-album" class="deletebtn" href="javascript:void(0)" a-data="{{$album->id}}"><i class="fas fa-trash-alt fa-lg btn btn-danger"></i></a>

						<div class="fileinput thumbnail">
							<a href="/adminpanel/dashboard/albums/{{ $album->id }}">
								<img class="thumbnail" src="/storage/albums_preview/{{ $album->preview }}" alt="{{ $album->name }}">
								<div id="block-album-title"></div>
								<div class="card-body">
									<h5>{{ str_limit($album->name, 30) }}</h5>	
								</div>
							</a>	
						</div>

						<br>
				</div>
			</div>		
			@endforeach	
		</div>
	</div>

	
@endsection

@section('deleteAlbum')
	
	<script>
		$(document).on('click', '.deletebtn', function(ev){

		    var albumid = $(this).attr("a-data");
		    var clickedObj = $(this).parent().parent();
		    if (confirm('Все фотографии которые внутри альбома будут удалены!')) {	
			    $.ajax({
			        method: 'DELETE',
			        url: '{{ url('/adminpanel/dashboard/albums/')}}',
			        dataType: 'text',
			        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			        data: {id:albumid,"_token": "{{ csrf_token() }}"},

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