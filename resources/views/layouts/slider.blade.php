
<div class="main-slider owl-carousel" id="main-slider">
  {{-- <div class="item"><img src="/img/slide2.jpg"></div> --}}
  {{-- <div class="item"><img src="/img/slide1-2.jpg"></div> --}}
	<div class="item">
		<div class=" page-header">
			<div class="page-header-image" style="background-image: url('/img/');"></div>
		</div>
	</div>
{{-- 	<div class="item">
		<div class="page-header  page-header-small">
			<div class="page-header-image" style="background-image: url('/img/slide1-2.jpg');"></div>
		</div>
	</div>
	 --}}

</div>

@section('mainSlider')
<script type="text/javascript">
  $(document).ready(function(){
    owl = $('#main-slider').owlCarousel({
      singleItem:true,
      items:1,
      autoplay:true,
      responsiveClass: true,
    });
  });
</script>
@endsection