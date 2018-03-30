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
	            <div class="col-md-8 ml-auto mr-auto text-center">
	                <h2 class="title">Медицинский Центр <span style="color: #f23d31;">«Ош-Кардио»</span> имени Алиева Мамата</h2>

	                <h4 class="description">		            
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

		<!-- GoogleMap -->
		<div id="map">
			<div class="test" style="width: 300px; height: 300px; background-color: #000; z-index: 2222; position: absolute;">
				
			</div>
		</div>
		<!-- / -->




@endsection