
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Медицинский Центр «Ош-Кардио» имени Алиева Мамата</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


	<!-- CSS Files -->
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/css/now-ui-kit.css" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="/css/owl-slider.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/js/owl.carousel.js"></script>
 </head>


<body class="landing-page" >
	{{-- navbar  --}}
		@include ('layouts.nav')
	{{--  --}}


	{{-- content --}}
	@yield('content')
	{{--  --}}

	@yield('script')
	@yield('mainSlider')


	<!-- FOOTER -->
	@include('layouts.footer')
	<!-- / -->


<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jasny-bootstrap.min.js"></script>
<script src="/js/now-ui-kit.js" type="text/javascript"></script>
<script src="/js/moments.min.js"></script>
<script src="/js/bootstrap-switch.js"></script>
<script src="/js/bootstrap-tagsinput.js"></script>
<script src="/js/bootstrap-selectpicker.js" type="text/javascript"></script>
<script src="/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    </body>


    <!--   Core JS Files   -->


</html>
		
