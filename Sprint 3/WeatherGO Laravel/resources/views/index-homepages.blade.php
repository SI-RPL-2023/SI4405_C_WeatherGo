<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>AppKit Mobile</title>
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
    
    <div class="header header-auto-show header-fixed header-logo-center">
        <a href="index.html" class="header-title">AppKit</a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i class="fas fa-share-alt"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Features</span></a>
        <a href="index-pages.html" class="active-nav"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
        
    
<!--    <div class="page-content-bg gradient-menu"><div></div></div>-->
    <div class="page-content">
    
        <div class="page-title page-title-fixed">
            <h1 class="font-23">Homepages</h1>
            <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
            <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
            <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
            <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
        </div>
        <div class="page-title-clear"></div>
                        
        <div class="card card-style">
            <div class="card mb-0 bg-18" data-card-height="150"></div>
            <div class="content mt-3 mb-0">
                
                <p class="color-highlight font-500 mb-n1">We Start with the </p>
                <h1>Appkit Homes</h1>
            
                <p>
                    It's super easy to create pages for Appkit! Here are some great examples of pre-made pages
                </p>
                
                <div class="list-group list-custom-small list-icon-0 check-visited">
                    <a href="index.html"><i class="fa fa-home rounded-sm bg-red-light"></i><span>Classic</span><i class="fa fa-angle-right"></i></a>
                    <a href="index2.html"><i class="fa fa-square rounded-sm bg-green-light"></i><span>Basics</span><i class="fa fa-angle-right"></i></a>
                    <a href="index3.html"><i class="fa fa-list rounded-sm bg-blue-light"></i><span>Discover</span><i class="fa fa-angle-right"></i></a>
                    <a href="index4.html"><i class="fa fa-calendar rounded-sm bg-magenta-light"></i><span>Today</span><i class="fa fa-angle-right"></i></a>
                    <a href="page-wallet.html"><i class="fa fa-wallet rounded-sm bg-brown-light"></i><span>Wallet</span><i class="fa fa-angle-right"></i></a>
                    <a href="page-places.html"><i class="fa fa-map-marker rounded-sm bg-teal-light"></i><span>Places</span><i class="fa fa-angle-right"></i></a>
                    <a href="page-store-home.html"><i class="fa fa-shopping-bag rounded-sm bg-mint-light"></i><span>Store</span><i class="fa fa-angle-right"></i></a>
                    <a href="page-news-home.html"><i class="fa fa-newspaper rounded-sm bg-magenta-light"></i><span>News</span><i class="fa fa-angle-right"></i></a>
                    <a href="page-profile-1.html"><i class="fa fa-user rounded-sm bg-green-light"></i><span>Profile 1</span><i class="fa fa-angle-right"></i></a>
                    <a href="page-profile-2.html"><i class="fa fa-users rounded-sm bg-pink-light"></i><span>Profile 2</span><i class="fa fa-angle-right"></i></a>
                    <a href="page-profile-3.html" class="border-0"><i class="fab fa-instagram rounded-sm bg-orange-light"></i><span>Profile 3</span><i class="fa fa-angle-right"></i></a>
                </div>

                
            </div>
        </div>
           
        <div data-menu-load="menu-footer.html"></div>
    </div>
    <!-- Page content ends here-->
    
    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.html" data-menu-width="280" data-menu-active="nav-homepages"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div> 
     
    
</div>

<script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
</body>
