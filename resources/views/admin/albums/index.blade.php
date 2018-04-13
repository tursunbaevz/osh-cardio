@extends('adminLayouts.admin_master')


@section('content')
	

	<div id="albums">
		<a id="btncreate-album" class="btn btn-info" href="/adminpanel/dashboard/albums/create/">Cоздать альбом</a>
		<h1 class="title text-center">Альбомы</h1>
		<div class="row text-center">

			@foreach($albums as $album)
			<div class="col-xs-6 a-b">
				<div class="album-block">
					
						<a id="edit-album" href="{{ action('Adminpanel\AlbumsController@edit', $album->id) }}"> <i class="fas fa-pencil-alt fa-lg"></i></a>

						<a id="trash-album" class="deletebtn" href="javascript:void(0)" a-data="{{$album->id}}"><i class="fas fa-trash-alt fa-lg"></i></a>

						<div class="fileinput thumbnail">
							<a href="/adminpanel/dashboard/albums/{{ $album->id }}">
								<img class="thumbnail" src="/storage/albums_preview/{{ $album->preview }}" alt="{{ $album->name }}">
								<div id="block-album-title"></div>
								<div class="card-body">
									<h5>{{ str_limit($album->name, 20) }}</h5>	
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