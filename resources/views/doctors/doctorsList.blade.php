@extends('layouts.master')


@section('content')
    @include ('layouts.navForPosts')
    <div class="container text-center" style="margin-top: 80px">
        <div class="row">
            @foreach($doctors as $doctor)
                <div class="col">
                    <div class="card i-teg text-center" style="width: 18rem; " >
                        <img class="card-img-top" src="/storage/doctors_image/{{ $doctor->doctors_image  }}" alt="Card image cap"><div class="card-body">
                            <h5 class="card-title">{{  $doctor->name  }}</h5>
                            <a  href="https://facebook.com"> <i class="fa fa-facebook-square"></i></a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection



