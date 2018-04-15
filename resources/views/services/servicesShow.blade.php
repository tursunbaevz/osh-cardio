@extends('layouts.master')

@section('content')
@include ('layouts.navForPosts')

<div class="page-header page-header-small" style="margin-top: 60px;">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('img/thumbnail/services/'.$services->image)}}');">
    </div>
    <div class="container">
        <div class="content-center">
            <h1 class="title">{{$services->title}}</h1>
        </div>
    </div>
</div>
<div class="section section-about-us">
    <div class="container">
        <div class="col-12" style="margin-bottom: 60px;">
            <p>{!! $services->body !!}</p>
        </div>  
    </div>
</div>

@endsection