<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>WeatherGO</title>
<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/style.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('fonts/css/fontawesome-all.min.css')}}">
<link rel="manifest" href="{{asset('_manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('app/icons/icon-192x192.png')}}">
</head>

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <div class="header header-fixed header-logo-center">
        <a href="#" class="header-title">WeatherGO</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="https://www.google.com/maps"><i class="fa fa-layer-group"></i><span>Maps</span></a>
        <a href="https://timeline.google.com/maps/timeline?hl=en&authuser=0&pli=1&rapt=AEjHL4MPnuDuKxJK938FR1ZYdnZxZA4wm2ELbhVFEASy8solDsMq6ukbJOhUBuSsQB_GcFFY8ZGMdMjJnJxxYm29ngFk1c5VCw&pb=!1m2!1m1!1s"><i class="fa fa-file"></i><span>History</span></a>
        <a href="{{route('home')}}" class="circle-nav active-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="{{route('galery')}}"><i class="fa fa-image"></i><span>Galery</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>


    <div class="page-content header-clear-medium">

        <div class="card card-style">
            <div class="content">
                <p class="font-600 color-highlight mb-n1">Let's start</p>
                <h1 class="font-30">Sign In</h1>
                <p>
                    Enter your credentials below to sign into your account.
                </p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                {{-- <div class="input-style no-borders has-icon validate-field mb-4">
                    <i class="fa fa-at"></i>
                    <input type="email" class="form-control validate-name" id="email" placeholder="Email Address">
                    <label for="email" class="color-highlight">Us</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style no-borders has-icon validate-field mb-4">
                    <i class="fa fa-lock"></i>
                    <input type="password" class="form-control validate-password" id="password" placeholder="Password">
                    <label for="password" class="color-highlight">Password</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div> --}}

                <div class="input-style no-borders has-icon mb-4">
                    <i class="fa fa-at"></i>
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-style no-borders has-icon mb-4">
                    <i class="fa fa-lock"></i>
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-full btn-l font-600 font-13 gradient-highlight mt-4 rounded-s">
                    {{ __('Login') }}
                </button>
                </form>
                <div class="row pt-3 mb-3">
                    <div class="col-6 text-start">
                        <a class="color-highlight" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{route('register')}}" class="color-highlight">Create Account</a>
                    </div>
                </div>

                <div class="divider"></div>

                <a href="#" class="btn btn-icon text-start btn-full btn-l font-600 font-13 bg-facebook mt-4 rounded-s"><i class="fab fa-facebook-f text-center"></i>Sign In with Facebook</a>
                <a href="#" class="btn btn-icon text-start btn-full btn-l font-600 font-13 bg-twitter mt-2 rounded-s"><i class="fab fa-twitter text-center"></i>Sign In with Twitter</a>
                <a href="#" class="btn btn-icon text-start btn-full btn-l font-600 font-13 bg-dark-dark mt-2 rounded-s"><i class="fab fa-apple text-center"></i>Sign In with Apple</a>

            </div>
        </div>


        <div data-menu-load="{{route('footer')}}"></div>
    </div>
    <!-- Page content ends here-->

    <!-- Main Menu-->
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="{{route('main')}}" data-menu-width="280" data-menu-active="nav-pages"></div>

    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>

    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="{{route('colors')}}" data-menu-height="480"></div>


</div>

<script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
</body>




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
