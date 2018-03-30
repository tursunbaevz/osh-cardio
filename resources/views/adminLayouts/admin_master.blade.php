<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/admin_master.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<title>admin dashboard</title>
</head>
<body>

	@include('adminLayouts.admin_nav')

		<div class="container-fluid">
			<div class="row full-height">
			<div class="col-2" style="background-color: #000;">
				<nav class="nav flex-column" style="margin-top: 20px">
				  <a class="nav-link active" href="{{ '/adminpanel/dashboard/posts' }}">Новости</a>
				  <a class="nav-link" href="#">Link</a>
				  <a class="nav-link" href="#">Link</a>
				  <a class="nav-link disabled" href="#">Disabled</a>
				</nav>
			</div>
			
			<div class="col"><br>

				{{-- EACH POST --}}
				<div class="row">

					 	@yield('content')

				</div>
				{{--/--}}

				</div>
			</div>
		</div>
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
