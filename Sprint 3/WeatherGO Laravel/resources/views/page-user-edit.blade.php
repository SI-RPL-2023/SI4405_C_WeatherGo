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
<link rel="manifest" href="{{asset('_manifest.json')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('app/icons/icon-192x192.png')}}">
<link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
</head>
    
<body class="theme-light">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-center header-auto-show">
        <a href="{{route('profile')}}" class="header-title">Edit Profile </a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Features</span></a>
        <a href="index-pages.html" class="active-nav"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="{{route('home')}}" class="circle-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
    
    <div class="page-title page-title-fixed">
        <h1>Edit Profile</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
        
    <div class="page-content">
             
        <div class="card card-style bg-28" data-card-height="450">
            <div class="card-top">
                <a href="{{route('uploadImage')}}" class="btn btn-s border-white color-white float-end mt-2 me-2 rounded-sm"><i class="fa fa-camera pe-2"></i>Upload </a>
                <a href="{{asset('profile_image/'.$user->iamge)}}" class="glightbox"><img src="{{asset('profile_image/'.$user->image)}}" class="menu-img img-fluid" alt=""></a>
            </div>
            <div class="card-bottom ms-3 me-3">
                <h1 class="font-40 line-height-xl color-white">{{$user->firstname}}<br>{{$user->lastname}}</h1>
                <p class="color-white opacity-60"><i class="fa fa-map-marker me-2"></i>{{$user->location}}</p>
                <p class="color-white opacity-80 font-15">
                    {{$user->about}}
                </p>
            </div>
            <div class="card-overlay bg-gradient"></div>
        </div>

        <div class="card card-style">
            <div class="content">
                <form action="{{route('storeProfile')}}" method="post">
                    @csrf
                    <p class="mb-n1 color-highlight font-600 font-12">Edit your Account</p>
                    <h4>Basic In</h4>
                    <p>
                        Public information that shows on top of your card in your profile page. This is just a dummy page.
                    </p>
                        
                    <div class="mt-5 mb-3">
                        
                        <div class="input-style has-borders no-icon input-style-always-active mb-4">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                            <label for="firstname" class="color-highlight">First Name</label>
                            <em>(required)</em>
                        </div>
                        <div class="input-style has-borders no-icon input-style-always-active mb-4">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                            <label for="lastname" class="color-highlight">Last Name</label>
                            <em>(required)</em>
                        </div>
                        <div class="input-style has-borders no-icon input-style-always-active mb-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@domain.com">
                            <label for="email" class="color-highlight">Email Address</label>
                            <em>(required)</em>
                        </div>
                        <div class="input-style has-borders no-icon input-style-always-active mb-4">
                            <input type="text" class="form-control" id="location" name="location" placeholder="San Francisco, California">
                            <label for="location" class="color-highlight">Location</label>
                            <em>(required)</em>
                        </div>
                        <div class="input-style has-borders no-icon input-style-always-active mb-4">
                            <textarea id="about" name="about" placeholder="Enter your message"></textarea>
                            <label for="about" class="color-highlight">Enter your Message</label>
                        </div>                    
                    </div>

                    <center>
                        <button  class="btn btn-full btn-m gradient-highlight rounded-s font-13 font-600 mt-4">Save Basic Information</button>
                    </center>
                </form>
            </div>
        </div>
            
        <div class="card card-style">
            <div class="content">
                
                <p class="mb-n1 color-highlight font-600 font-12">Edit your General</p>
                <h4>Privacy Settings</h4>
                <p>
                    Private information that doesn't show on top of your card in your profile page. This is just a dummy page.
                </p>

                <div class="d-flex mb-3">
                    <div class="pt-1">
                        <h5 data-data-trigger-switch="toggle-id-1" class="font-600 font-14">Private Profile</h5>
                    </div>
                    <div class="ms-auto me-3 pe-2">
                        <div class="custom-control ios-switch small-switch">
                            <input type="checkbox" class="ios-input" id="toggle-id-1">
                            <label class="custom-control-label" for="toggle-id-1"></label>
                        </div>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="pt-1">
                        <h5 data-data-trigger-switch="toggle-id-2" class="font-600 font-14">Share Location</h5>
                    </div>
                    <div class="ms-auto me-3 pe-2">
                        <div class="custom-control ios-switch small-switch">
                            <input type="checkbox" class="ios-input" id="toggle-id-2">
                            <label class="custom-control-label" for="toggle-id-2"></label>
                        </div>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="pt-1">
                        <h5 data-data-trigger-switch="toggle-id-3" class="font-600 font-14">Subscribe to  Mails</h5>
                    </div>
                    <div class="ms-auto me-3 pe-2">
                        <div class="custom-control ios-switch small-switch">
                            <input type="checkbox" class="ios-input" id="toggle-id-3" checked>
                            <label class="custom-control-label" for="toggle-id-3"></label>
                        </div>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="pt-1">
                        <h5 data-data-trigger-switch="toggle-id-4" class="font-600 font-14">Hide Email Address</h5>
                    </div>
                    <div class="ms-auto me-3 pe-2">
                        <div class="custom-control ios-switch small-switch">
                            <input type="checkbox" class="ios-input" id="toggle-id-4" checked>
                            <label class="custom-control-label" for="toggle-id-4"></label>
                        </div>
                    </div>
                </div>
                
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
