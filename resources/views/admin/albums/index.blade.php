@extends('adminLayouts.admin_master')


@section('content')
	

	<a id="btncreate-album" class="btn btn-info" href="/adminpanel/dashboard/albums/create/"><i class="fas fa-plus"></i>&nbsp;&nbsp;Новый Альбом</a>
		<h1 class="title">Галерея</h1>
	<div id="albums" class="text-center">

		{{--  уведомление  --}}

	<div class="text-center alert-notice-style">
		<div class="alert alert-danger" id="fadein-alert" style="display: none;">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Галерея удалена!</strong>				
		</div>
	</div>

		<div class="row">

			@foreach($albums as $album)

			<div class="col-md-4">
				<div class="album-block">
					
				
						<div class="fileinput thumbnail">
							<a href="/adminpanel/dashboard/albums/{{ $album->id }}">
								<img class="thumbnail" src="/storage/albums_preview/{{ $album->preview }}" alt="{{ $album->name }}">
								<div id="block-album-title"></div>
								<div class="card-body">
									<h5>{{ str_limit($album->name, 20) }}</h5>	
									

								<a id="edit-album" href="{{ action('Adminpanel\AlbumsController@edit', $album->id) }}"><i class="fas fa-edit fa-lg"></i></a>

								<a id="trash-album" class="deletebtn" href="javascript:void(0)" a-data="{{$album->id}}"><i class="fas fa-trash-alt fa-lg"></i></a>

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
		    var clickedObj = $(this).parent().parent().parent().parent();
		    if (confirm('Все фотографии которые внутри альбома будут удалены!')) {	
			    $.ajax({
			        method: 'DELETE',
			        url: '{{ url('/adminpanel/dashboard/albums/')}}',
			        dataType: 'text',
			        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			        data: {id:albumid,"_token": "{{ csrf_token() }}"},

			        success: function (data) {
		  				$(clickedObj).fadeOut( "slow", function() {
		    				$('#fadein-alert').fadeIn('slow', function() {
		    					$(this).fadeOut(4000, function() {
		    						//операция завершена
		    					});
	    					});
		  				});
			        }
			    });  
			} 
		});

	</script>

@endsection