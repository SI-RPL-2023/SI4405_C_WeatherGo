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
<link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
</head>
    
<body class="theme-light">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-center">
        <a href="{{route('galery')}}" class="header-title">Gallery</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fa fa-chevron-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="https://www.google.com/maps"><i class="fa fa-layer-group"></i><span>Maps</span></a>
        <a href="https://timeline.google.com/maps/timeline?hl=en&authuser=0&pli=1&rapt=AEjHL4MPnuDuKxJK938FR1ZYdnZxZA4wm2ELbhVFEASy8solDsMq6ukbJOhUBuSsQB_GcFFY8ZGMdMjJnJxxYm29ngFk1c5VCw&pb=!1m2!1m1!1s"><i class="fa fa-file"></i><span>History</span></a>
        <a href="{{route('uploadGalery')}}" class="circle-nav"><i class="fa fa-camera"></i><span>Upload Image</span></a>
        <a href="{{route('galery')}}" class="active-nav"><i class="fa fa-image"></i><span>Gallery</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
        
    <div class="page-content header-clear-medium">
        
        <div class="card card-style">
            <div class="content"> 
                <p class="mb-n1 color-highlight font-600">Albums</p>
                <h1>My Albums</h1>
                <p>
                    You can put and see the beautiful moment!
                </p>
                <div class="divider"></div>
                
                <ul class="gallery-filter-controls">
                    <li class="color-highlight gallery-filter-all pt-1 pb-1" data-filter="all">RecentS</li>
                    <li data-filter="2">Selfies</li>
                    <li data-filter="1">Videos</li>
                    <li data-filter="3">Photos</li>
                </ul>
            </div>
            <div class="content mb-3 mt-n3">
                <div class="gallery gallery-filter">
                    @foreach ($galery as $item)
                        <a href="{{asset('images/Gallery/'.$item->path)}}" data-gallery="{{$item->kategori}}" class="filtr-item" title="{{$item->tittle}}" data-category="{{$item->kode}}">
                            <img src="{{asset('images/Gallery/'.$item->path)}}" data-src="{{asset('images/Gallery/'.$item->path)}}" class="preload-img rounded-s shadow-m" alt="sample image">
                        </a>
                    @endforeach							
                    	

                    {{-- <a href="images/Gallery/Photos/2.jpg" data-gallery="gallery-3" class="filtr-item" title="Susu Murni Dago" data-category="3">
                        <img src="images/empty.png" data-src="images/Gallery/Photos/2.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>							
                    <a href="images/Gallery/Photos/3.jpg" data-gallery="gallery-3" class="filtr-item" title="Goes To Dago Pakar" data-category="3">
                        <img src="images/empty.png" data-src="images/Gallery/Photos/3.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>							
                    <a href="images/Gallery/Photos/4.jpg" data-gallery="gallery-3" class="filtr-item" title="Playing At Saparua" data-category="3">
                        <img src="images/empty.png" data-src="images/Gallery/Photos/4.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>							
                    <a href="images/Gallery/Photos/5.jpg" data-gallery="gallery-3" class="filtr-item" title="Goes To Lembang" data-category="3">
                        <img src="images/empty.png" data-src="images/Gallery/Photos/5.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>							
                    <a href="images/Gallery/Photos/6.jpg" data-gallery="gallery-3" class="filtr-item" title="Armour Coffee Dago With Kelasan" data-category="3">
                        <img src="images/empty.png" data-src="images/Gallery/Photos/6.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>							
                    <a href="images/Gallery/Photos/7.jpg" data-gallery="gallery-3" class="filtr-item" title="Goes To Lembang" data-category="3">
                        <img src="images/empty.png" data-src="images/Gallery/Photos/7.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>							
                    <a href="images/Gallery/Photos/8.jpg" data-gallery="gallery-3" class="filtr-item" title="Goes To Pangalengan With Sisfo 19-20" data-category="3">
                        <img src="images/empty.png" data-src="images/Gallery/Photos/8.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>
                    <a href="images/Gallery/Photos/9.jpg" data-gallery="gallery-3" class="filtr-item" title="Goes To Cartil" data-category="3">
                        <img src="images/empty.png" data-src="images/Gallery/Photos/9.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>
                    <!-- <a href="images/pictures/9t.jpg" data-gallery="gallery-1" class="filtr-item" title="Cream Pie" data-category="1">
                        <img src="images/empty.png" data-src="images/pictures/9s.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a> -->
                    <a href="images/Gallery/Selfies/1.jpg" data-gallery="gallery-2" class="filtr-item" title="RPL Praktikum 1" data-category="2">
                        <img src="images/empty.png" data-src="images/Gallery/Selfies/1.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>
                    <a href="images/Gallery/Selfies/2.jpg" data-gallery="gallery-2" class="filtr-item" title="RPL Praktikum 2" data-category="2">
                        <img src="images/empty.png" data-src="images/Gallery/Selfies/2.jpg" class="preload-img rounded-s shadow-m" alt="sample image">
                    </a>							 --}}
                </div>
            </div>
        </div>
     
        <div data-menu-load="{{route('footer')}}"></div>
    </div>
    <!-- Page content ends here-->
    
    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="{{route('main')}}" data-menu-width="280" data-menu-active="nav-media"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="{{route('colors')}}" data-menu-height="480"></div> 
     
    
</div>

<script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
</body>
