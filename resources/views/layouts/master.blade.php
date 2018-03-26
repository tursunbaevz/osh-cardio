
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Landing Page - Now UI Kit Pro by Creative Tim | Premium Bootstrap 4 UI Kit</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

<!-- CSS Files -->
<link href="/css/bootstrap.min.css" rel="stylesheet" />
<link href="/css/now-ui-kit.css" rel="stylesheet" />

    </head>

    <body class="landing-page" >
    	@include ('layouts.nav')
<div class="wrapper">




<!-- наш слайд -->
	<div class="carousel-relative">
		@include('layouts.slider')
	</div>
<!-- конец слайда -->


			
		
		
	
	<!-- наши услуги -->
	<div class="pricing-2 ">
		<div class="main-div center text-style-div" style="margin-top: -10px;">
				<div class="num-div">
					<img src="/icons/doctor.svg">
					<br> Лучшие<br>специалисты
				</div>	

				<div class="num-div">
					<img src="/icons/online-shop.svg">
					<br> Современное<br>оборудование
				</div>

				<div class="num-div">
				    <img src="/icons/care.svg"><br> Отличный<br>сервис
				</div>

				<div class="num-div">
					<img  src="/icons/ambulance.svg">
					<br> Выездная<br>кардиобригада
				</div> 
		</div>

	    <div class="container">
	        <div class="row">
	            <div class="col-md-6 ml-auto mr-auto text-center">
	                <h2 class="title">Наши услуги</h2>
	            </div>
	        </div>



	        <div class="row">

	            <div class="col-md-4">
	                <div class="card card-pricing card-background card-raised" style="background-image: url('/img/block1-angio.jpg')">
	                    <div class="card-body">    
	                        <div class="more-services" style="margin-top: 100px;">
	                        	<h3 class="category text-info center-block-btn">АНГИОГРАФИЯ<br>СТЕНТИРОВАНИЕ</h3>
	                        	<a href="#pablo" class="btn icon-small btn-round m-style">
	                           		подробнее
	                        	</a>
	                        </div>                   
	                    </div>
	                </div>
	            </div>

	          

	            <div class="col-md-4">
	                <div class="card card-pricing card-background card-raised" style="background-image: url('/img/block2-op.jpg')">
	                    <div class="card-body">
	                        
	                        <div class="more-services">
	                        	<h3 class="category text-info center-block-btn">ОПЕРАЦИИ<br>НА СЕРДЦЕ</h3>
	                        	<a href="#pablo" class="btn icon-small btn-round m-style">
	                            	подробнее
	                        	</a>
	                        </div>
	                        
	                    </div>
	                </div>
	            </div>

  				<div class="col-md-4">
	                <div class="card card-pricing card-background card-raised" style="background-image: url('/img/block3-stac.jpg')">
	                    <div class="card-body">
	                    	<div class="more-services">
		                        <h3 class="category text-info center-block-btn">СТАЦИОНАРНОЕ<br>ЛЕЧЕНИЕ</h3>
		                        <a href="#pablo" class="btn icon-small btn-round m-style">
		                            подробнее
		                        </a>
		                    </div>
	                    </div>
	                </div>
	            </div>
	         
			
				<!-- кнопка все услуги -->
				<div class="block-service-center">
					<div class="justify-content-center">
		                <a href="#" class="btn btn-primary btn-block btn-lg btn-round ">
		              	  	ВСЕ УСЛУГИ
		                </a>
	        	    </div>	
		        </div>
				<!-- / -->

	        </div>

	    </div>
	</div>
	<!-- / -->

	<!-- блок краткая инфа -->
	<div class="testimonials-1 section-image parallax">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-6 ml-auto mr-auto text-center">
	                <h2 class="title">Краткая Инфа</h2>

	                <h4 class="description text-white">If you’re selected for ALPHA you’ll also get 3 tickets, opportunity to access Investor Office Hours and Mentor Hours and much more all for €850.</h4>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-md-4">
	                <div class="card card-testimonial">
	                    <div class="card-avatar">
	                        <a href="#pablo">
	                            <img class="img img-raised" src="/img/a-1.jpg">
	                        </a>
	                    </div>
	                    <div class="card-body">
	                        <p class="card-description">
	                            The networking at Web Summit is like no other European tech conference.
	                        </p>
	                    </div>
	                    <div class="icon icon-red">
	                        <i class="fa fa-quote-right"></i>
	                    </div>
	                    <div class="card-footer">
	                        <h4 class="card-title">Michael Elijah</h4>
	                        <p class="category">@michaelelijah</p>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-4">
	                <div class="card card-testimonial">
	                    <div class="card-avatar">
	                        <a href="#pablo">
	                            <img class="img img-raised" src="/img/a-3.jpg">
	                        </a>
	                    </div>
	                    <div class="card-body">
	                        <p class="card-description">
	                            The connections you make at Web Summit are unparalleled, we met users all over the world.
	                        </p>
	                    </div>
	                    <div class="icon icon-red">
	                        <i class="fa fa-quote-right"></i>
	                    </div>
	                    <div class="card-footer">
	                        <h4 class="card-title">Olivia Harper</h4>
	                        <p class="category">@oliviaharper</p>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-4">
	                <div class="card card-testimonial">
	                    <div class="card-avatar">
	                        <a href="#pablo">
	                            <img class="img img-raised" src="/img/a-2.jpg">
	                        </a>
	                    </div>
	                    <div class="card-body">
	                        <p class="card-description">
	                            Web Summit will increase your appetite, your inspiration, and your network.
	                        </p>
	                    </div>
	                    <div class="icon icon-red">
	                        <i class="fa fa-quote-right"></i>
	                    </div>
	                    <div class="card-footer">
	                        <h4 class="card-title">James Logan</h4>
	                        <p class="category">@jameslogan</p>
	                    </div>
	                </div>
	            </div>

	        </div>

	    </div>

	</div>
	<!--/-->


	<!-- обратная связь -->

	<div class="section background-parallax" style="background: url('/img/pic-pic2.jpg');">
		<div class="pricing-2">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		                <div class="card card-pricing  card-raised bg-2">
		                    <div class="card-body">
		                    <h2 class="title" style="text-align: center;">Свяжитесь с нами</h2>
		                    <br>
		                        <div class="row">
						            <div class="col-lg-8 text-center ml-auto mr-auto col-md-8">
						              <div class="input-group input-lg">
						                <div class="input-group-prepend">
						                  <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
						                </div>
						                <input type="text" class="form-control" placeholder="Имя...">
						              </div>

						              <div class="input-group input-lg">
						                <div class="input-group-prepend">
						                  <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
						                </div>
						                <input type="text" class="form-control" placeholder="Email...">
						              </div>
						                <div class="textarea-container">
						                    <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Ваше сообщение..."></textarea>
						                </div>
						                <div class="send-button">
						                    <a href="/" class="btn btn-primary btn-red btn-round btn-block btn-lg">Отправить</a>
						                </div>
						            </div>
						        </div>
		                    
		                    </div>
		                </div>
		            </div>

				<!-- second part -->

		            <div class="col-md-6" >
		            	<div class="card-pricing">
		                	<div class="card-body" style="margin-top: 60px;">
		                        <ul>
							  		<li>
						  				<i class="now-ui-icons tech_mobile"></i><a href="tel:+996777777777">+996-777-777-777</a>
	                        			
		                            </li>
		                            <li>
		                            	<i class="now-ui-icons location_pin"></i>
		                            	<a href="mailto:info@oshcardio.kg"> г.Ош, ул.Моминова 11</a>
		                            </li>
		                            <li>
		                            	<i class="now-ui-icons ui-1_email-85"></i>
		                            	<a href="mailto:info@oshcardio.kg">info@oshcardio.kg</a>
		                            </li>
		                        </ul>	                     
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<!-- / -->

		<!-- GoogleMap -->
		<div id="map">
			<div class="test" style="width: 300px; height: 300px; background-color: #000; z-index: 2222; position: absolute;">
				
			</div>
		</div>
		<!-- / -->


	<!-- FOOTER -->
	<footer class="footer footer-default" style="margin-top: 5px;">


	    <div class="container footer-text">
	        <nav>
	            <ul>
	                <li>
	                    <a href="#">
	                        Page 1
	                    </a>	                    
	                    <a href="#">
	                        Page 2
	                    </a>
	                    <a href="#">
	                        Page 3
	                    </a>
	                    <a href="#">
	                        Page 4
	                    </a>
	                </li>
	            </ul>
	        </nav>
	        <div class="copyright">
	            &copy; <script>document.write(new Date().getFullYear())</script>, Created by <a href="#">WebStudio(TODO)</a>
	        </div>
	    </div>
	</footer>

</div>
<!-- / -->
	
	@yield('content')

    </body>


    <!--   Core JS Files   -->

<script src="/js/jquery.3.2.1.min.js"></script>
<script src="/js/moments.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-switch.js"></script>
<script src="/js/bootstrap-tagsinput.js"></script>
<script src="/js/bootstrap-selectpicker.js" type="text/javascript"></script>
<script src="/js/jasny-bootstrap.min.js"></script>
<script src="/js/nouislider.min.js" type="text/javascript"></script>
<script src="/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/js/now-ui-kit.js" type="text/javascript"></script>
<script src="/js/map-script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVNZ20eXXPEUqeTmCFpmmZkoHeVwd9aWQ&callback=initMap"
async defer></script>




</html>
		
