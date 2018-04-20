<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="/css/admin_master.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/web-fonts-with-css/css/fontawesome-all.css') }}">
	<title>admin dashboard</title>
</head>
<body>

	@include('adminLayouts.admin_nav')

		<div class="container-fluid" style="margin-top: 50px;">
			{{--  уведомление  --}}
				{{--  уведомление  --}}

				<div class="text-center alert-notice-style">
					<div class="alert alert-danger" id="fadein-alert" style="display: none;">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Фотография удалена!</strong>				
					</div>
				</div>


			
				<div class="text-center alert-notice-style">	
					@if(session()->has('notifcreate'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>{{ session()->get('notifcreate') }}</strong>				
						</div>
					@endif

					@if(session()->has('notifupdate'))
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>{{ session()->get('notifupdate') }}</strong>				
						</div>
					@endif
				</div>	
			<div class="col-10" style="margin: auto;"><br>

					{{-- EACH --}}
					@yield('content')

	
					{{--/--}}

				</div>
			</div>
		</div>

		<script src="{{ asset('/js/app.js') }}"></script>
	
		@yield('script')
		@yield('ckeditor')
		@yield('deletePhoto')
		@yield('deleteAlbum')
		@yield('deleteDoctor')
		@yield('upload_image')

</body>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jasny-bootstrap.min.js"></script>
</html>
