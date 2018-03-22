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
		<div>	

		</div>
	</section>
<!-- 

	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Admin Dashboard</div>

	                <div class="card-body">
	                    @if (session('status'))
	                        <div class="alert alert-success">
	                            {{ session('status') }}
	                        </div>
	                    @endif

	                    Вы вошли как Администратор!
	                </div>
	            </div>
	        </div>
	    </div>
 -->


	@yield('content')
</body>

<script src="/js/bootstrap.min.js"></script>
</html>