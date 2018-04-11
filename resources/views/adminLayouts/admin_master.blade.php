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

		<div class="container-fluid">
			
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

</body>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jasny-bootstrap.min.js"></script>
</html>
