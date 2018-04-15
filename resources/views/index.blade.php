@extends ('layouts.master')



@section('content')
@include ('layouts.nav')



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
		                <a href="{{ '/services' }}" class="btn btn-primary btn-block btn-lg btn-round ">
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
	            <div class="col-md-8 ml-auto mr-auto text-center">
	                <h2 class="title-info">Медицинский Центр <span style="color: #f23d31;">«Ош-Кардио»</span> имени Алиева Мамата</h2>

	                <h4 class="description-info">		            
						Ультрасовременная частная гибридная клиника, отвечающая международным стандартам в организации медицинской помощи 
						в области Кардиологического вмешательства и по уровню предоставляемого сервиса.
					</h4>
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
	                            Учредитель Медицинского Центра	
								Генеральный директор
								ОсОО <b>«Фирма МПА»</b>
								«Главная цель современного бизнеса – социальные инвестиции»
	                        </p>
	                    </div>
	                    <div class="icon icon-red">
	                        <i class="fa fa-quote-right"></i>
	                    </div>
	                    <div class="card-footer">
	                        <h4 class="card-title">Алиев Алмазбек <br> Маматович</h4>
	                        <p class="category">@link</p>
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
								Директор Медицинского Центра
								Кандидат медицинских наук
								Отличник здравоохранения Кыргызской Республики
	                        </p>
	                    </div>
	                    <div class="icon icon-red">
	                        <i class="fa fa-quote-right"></i>
	                    </div>
	                    <div class="card-footer">
	                        <h4 class="card-title">Турсунбаев Мухаметалим Сатканкулович</h4>
	                        <p class="category">@link</p>
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
	                            Заместитель директора – главный врач Медицинского центра
								Врач-кардиолог
								высшей категории
	                        </p>
	                    </div>
	                    <div class="icon icon-red">
	                        <i class="fa fa-quote-right"></i>
	                    </div>
	                    <div class="card-footer">
	                        <h4 class="card-title">Максутов Жыргалбек <br> Раимжанович</h4>
	                        <p class="category">@link</p>
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

	<!-- 2GIS -->
	<div class="gis">
		<a class="dg-widget-link" href="http://2gis.kg/osh/firm/70000001031160528/center/72.79355406761171,40.52625311508752/zoom/18?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Оша</a><div class="dg-widget-link"><a href="http://2gis.kg/osh/firm/70000001031160528/photos/70000001031160528/center/72.79355406761171,40.52625311508752/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.kg/osh/center/72.793655,40.525973/zoom/18/routeTab/rsType/bus/to/72.793655,40.525973╎Кардиологический центр им. М. Алиева?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Кардиологический центр им. М. Алиева</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":1000,"height":500,"borderColor":"#a3a3a3","pos":{"lat":40.526237,"lon":72.795646,"zoom":17},"opt":{"city":"osh"},"org":[{"id":"70000001031160528"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
	</div>
	<!--////-->
	   
	<div class="container">
		<div class="row">

			<div class="news-slider">
				<div class="owl-carousel owl-theme" id="slider">
				    @foreach($posts as $post)
						<div class="item item-news">			
						    <img class="card-img-top" src="{{asset('img/thumbnail/news/'.$post->imageNews)}}" alt="Card image cap">
						    <div class="card-body">
							    <h5 class="card-title">{!! str_limit($post->title, 20)   !!}</h5>
							    <p class="card-text">{!! str_limit(strip_tags($post->body), 100) !!}</p>
							    <a href="{{ '/posts/' . $post->id }}" class="btn btn-primary">подробнее</a>
						    </div>					
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>


	<!-- / -->	
@endsection


@section('script')

<script type="text/javascript">
	$(document).ready(function(){
		owl = $('#slider').owlCarousel({
			margin: 10,
			items: 5,
			autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:false
		        },
		        600:{
		            items:3,
		            nav:false
		        },
		        1000:{
		            items:4,
		            nav:false,
		            loop:false
		        }
    		}

		});
	});

</script>


@endsection

