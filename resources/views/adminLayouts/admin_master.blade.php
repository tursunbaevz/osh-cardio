<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/admin_master.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<title>admin dashboard</title>
</head>
<body>
	@include('adminLayouts.admin_nav')

	<section class="side-bar-admin">
		<div class="links">	
			<ul>
				<li><a href="{{ url('/adminpanel/dashboard/posts') }}">Новости</a></li>
				<li><a href="{{ url('/adminpanel/dashboard/albums') }}">Альбомы</a></li>
				<li><a href="{{ url('/adminpanel/dashboard/services') }}">Услуги</a></li>
			</ul>
		</div>
	</section>


	


	@yield('content')
</body>

<script src="/js/bootstrap.min.js"></script>
</html>