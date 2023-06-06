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
    
    <div class="header header-fixed header-logo-center header-auto-show">
        <a href="{{route('uploadImage')}}" class="header-title">File Upload</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i cla="fas fa-bars"></i></a>
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
    
    <div class="page-title page-title-fixed">
        <h1>File Upload</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
        
    <div class="page-content">
                        
        
        <div class="card card-style">
            <div class="content">
                <p>
                    You can use the input type file to upload files and apply your back-end logic to them. For this example, we used
                    a simple image, where the properties and image will be displayed when uploading. We do not keep any images on our srvers. 
                </p>
            </div>
        </div>
        <div class="card card-style">
            <div class="content mb-0">
                <p class="mb-n1 color-highlight font-600">Select your Image and</p>
                <h1>Upload Here</h1>
                <p>
                    Upload an image and get all the data inside it placed nicely and with a preview of the image above it all.
                </p>
                <form action="{{route('storeGalery')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                <div class="file-data pb-5">
                    <input type="file" id="foto" name="foto" class="upload-file bg-highlight shadow-s rounded-s ">
                    <p class="upload-file-text color-white">Upload Image</p>
                </div>
                <div class="list-group list-custom-large upload-file-data disabled">
                    <img id="image-data" src="images/empty.png" class="img-fluid">
                    <a href="#" class="border-0">
                        <i class="fa font-14 fa-info-circle color-blue-dark"></i>
                        <span>File Name</span>
                        <strong class="upload-file-name">JS Populated</strong>
                    </a>        
                    <a href="#" class="border-0">
                        <i class="fa font-14 fa-weight-hanging color-brown-dark"></i>
                        <span>File Size</span>
                        <strong class="upload-file-size">JS Populated</strong>
                    </a>        
                    <a href="#" class="border-0">
                        <i class="fa font-14 fa-tag color-red-dark"></i>
                        <span>File Type</span>
                        <strong class="upload-file-type">JS Populated</strong>
                    </a>        
                    <a href="#" class="border-0 pb-4">
                        <i class="fa font-14 fa-clock color-blue-dark"></i>
                        <span>Modified Date</span>
                        <strong class="upload-file-modified">JS Populated</strong>
                    </a>        
                </div>
                <center>
                <label for="tittle">Tittle</label>
                <input type="text" name="tittle" id="tittle" class="">
                
                <label for="option">Jenis File</label>
                <select name="option" id="option" class="select bg-highlight shadow-s rounded-s "> 
                    <option value="photos">Photos</option>
                    <option value="selfie">Selfie</option>
                </select></center>

                    <center><button class="btn btn-primary" type="submit">Submit</button></center>
                </form>

            </div>
        </div>
  
            
        <div data-menu-load="{{route('footer')}}"></div>
    </div>
    <!-- Page content ends here-->
    
    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="{{route('main')}}" data-menu-width="280" data-menu-active="nav-components"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="{{route('colors')}}" data-menu-height="480"></div> 
     
    
</div>

<script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
</body>
