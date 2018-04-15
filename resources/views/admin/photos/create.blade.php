@extends('adminLayouts.admin_master')

@section('content')



	<form id="upload" method="POST" action="/adminpanel/dashboard/photos/store" enctype="multipart/form-data">

		{{csrf_field()}}
		<div class="wrapp-photo-form text-center">
			<h3>Выберите фотографии</h3>
			
			<div class="fileinput fileinput-new text-center" data-provides="fileinput">
			        <span class="btn btn-raised btn-round btn-default btn-file">
			            <span class="fileinput-new">выбрать картинку</span>
			            <span class="fileinput-exists">изменить</span>
			            <input type="hidden" name="album_id" value="{{ $album_id }}">
			            <input type="file" name="image[]" multiple>
			        </span>
			</div> 
			<br>
			<div class="text-center">
		    	<button type="submit" class="btn btn-success btn-lg">Загрузить</button>
		    </div>
		</div>
	</form>

	<div class="text-center" id="messageafter"></div>

@endsection


@section('upload_image')
	
	<script>
		var form = document.getElementById('upload');
		var request = new XMLHttpRequest();

		form.addEventListener('submit', function(e){
			e.preventDefault();
			var formData = new FormData(form);
			request.open('post', '/adminpanel/dashboard/photos/store');
			request.addEventListener("load", transferComplete);
			request.send(formData);
		});

		function transferComplete(data) {
			var responsee = JSON.parse(data.cuurentTarget.response);
			if (responsee.success) {
				document.getElementById('messageafter').innerHTML = "Фотографии успешно загрузилсь!";
			}
		}


	</script>

@endsection