@extends('adminLayouts.auth_admin')

@section('content')



 <!-- Navbar -->
    @include ('layouts.nav')
    <!-- End Navbar -->

    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(/img/geny.svg); background-size: center; transform: rotate(-30deg);"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="/img/logo.svg" class="black-shadow">
                            </div>
                        </div>
                        <div class="content">

                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons objects_key-25"></i>
                                </span>
                                <input id="password" type="password" placeholder="••••••••••••••" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
        
                        </div>





                        <div class="footer text-center" style="padding: 0">


                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                                {{ __('Login') }}
                            </button>

                            
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
