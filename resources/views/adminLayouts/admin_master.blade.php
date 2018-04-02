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

				{{-- EACH POST --}}
				<div class="row">

					 	@yield('content')

				</div>
				{{--/--}}

				</div>
			</div>
		</div>

			<script src="{{ asset('js/app.js') }}"></script>

		@yield('script')
</body>

<script src="/js/bootstrap.min.js"></script>
<script src="{{ asset('/js/ckeditor/ckeditor.js') }}"
type="text/javascript" charset="utf-8" ></script>
<script>
        var editor = CKEDITOR.replace( 'editor1',{
                 filebrowserBrowseUrl : '/elfinder/ckeditor' 
        } );
</script>
</html>
