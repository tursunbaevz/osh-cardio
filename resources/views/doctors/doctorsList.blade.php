@extends('layouts.master')


@section('content')

@include ('layouts.nav')
<div class="page-header  page-header-small">
    <div class="page-header-image" style="background-image: url('img/photo.jpg');"></div>
    <div class="content-center">
        <h1 class="title">Наши Врачи</h1>
    </div>
</div>
<div class="container text-center" style="margin-top: 80px">
    <div class="row" style="margin-bottom: 80px;">
    @foreach($doctors as $doctor)
        <div class="col">
            <div class="card i-teg text-center" style="width: 18rem; " >
                <img class="card-img-top" src="/storage/doctors_image/{{ $doctor->doctors_image  }}" alt="Card image cap"><div class="card-body">
                    <h5 class="card-title">{{  str_limit($doctor->name, 60)  }}</h5>
                    <br>
                    <a class="btn btn-primary btn-round" href="/doctors/{{$doctor->id}}">  
                        подробнее
                    </a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection



