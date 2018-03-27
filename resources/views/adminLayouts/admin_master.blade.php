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
				  <a class="nav-link active" href="#">Active</a>
				  <a class="nav-link" href="#">Link</a>
				  <a class="nav-link" href="#">Link</a>
				  <a class="nav-link disabled" href="#">Disabled</a>
				</nav>
			</div>
			
			<div class="col"><br>
				<div class="float-btn">
				   <button type="button" class="float-right btn btn-success btn-lg pull-right">Новый пост</button>
				</div><br><br>


				{{-- EACH POST --}}
				<div class="row">

					{{-- content --}}
					<div class="col-8" style="margin:auto;">
					 	@yield('content')
					 </div>

					 <div class="col-2">
						<div class="btn-group-vertical">
							<button type="button" class="btn btn-primary btn-sm" style="margin-bottom: 5px">Редактировать</button>

							<button type="button" class="btn btn-danger btn-sm">Удалить</button>
						</div>
					 </div>
				</div><hr>
				{{--/--}}


				{{-- EACH POST --}}
				<div class="row">

					{{-- content --}}
					<div class="col-8" style="margin:auto;">
					 	@yield('content')
					 </div>

					 <div class="col-2">
						<div class="btn-group-vertical">
							<button type="button" class="btn btn-primary btn-sm" style="margin-bottom: 5px">Редактировать</button>

							<button type="button" class="btn btn-danger btn-sm">Удалить</button>
						</div>
					 </div>
				</div><hr>
				{{--/--}}

				{{-- EACH POST --}}
				<div class="row">

					{{-- content --}}
					<div class="col-8" style="margin:auto;">
					 	@yield('content')
					 </div>

					 <div class="col-2">
						<div class="btn-group-vertical">
							<button type="button" class="btn btn-primary btn-sm" style="margin-bottom: 5px">Редактировать</button>

							<button type="button" class="btn btn-danger btn-sm">Удалить</button>
						</div>
					 </div>
				</div>
				{{--/--}}



				</div>
			</div>
		</div>
</body>

<script src="/js/bootstrap.min.js"></script>
</html>