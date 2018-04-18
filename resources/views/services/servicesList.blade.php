@extends('layouts.master')

@section('content')
@include ('layouts.nav')

<div class="page-header">
	<div class="page-header-image" style="background-image: url('img/photo.jpg');"></div>
	<div class="content-center">
		<h1 class="title">Наши услуги</h1>
	</div>
</div>
<div class="container" style="margin-top: 80px">
	<div class="row">
	@foreach($services as $service)
		<div class="col-md-4">
			<div class="card card-pricing card-background card-raised" style="background-image: url({{asset('img/thumbnail/services/grid/' . $service->imageGrid)}});">
				<div class="card-body">    
					<div class="more-services" style="margin-top: 100px;">
						<h3 class="category text-info center-block-btn" style ="text-transform: uppercase;">
							{!! str_limit($service->title, 35) !!}
						</h3><br><br>
						<a class="btn icon-small btn-round m-style" href="/services/{{$service->id}}">	
							подробнее
						</a>
					</div>                   
				</div>
			</div>
		</div>
	@endforeach
	</div>
</div>
<div class="pagination" style="margin: 50px auto;">
	{{$services->links()}}	
</div>

@endsection