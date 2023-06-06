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
        <a href="index.html" class="header-title">About Us </a>
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
    
    <div class="page-title page-title-fixed">
        <h1>About Us</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
        
    <div class="page-content">
        
        <div class="card card-style" data-card-height="400">
            <img src="{{asset('images/header.jpeg')}}" class="img-fluid">
            <div class="card-top text-center">
                <h1 class="color-white text-center font-22 pt-3 mb-0">"Navigate, Weather, Music: Journey Made Effortless and Enjoyable!"</h1>

            </div>
            <div class="card-bottom text-center">
                <p class="color-white font-15 opacity-70 px-4">
                    Join us on this exciting journey and let us be your trusted companion on all your travels. Explore our website now and experience the convenience and pleasure of seamless navigation, up-to-date weather information, and delightful music.
                </p>
            </div>
            
            <div class="card-overlay bg-gradient"></div>
        </div>
        
        
        
        <div class="card card-style">
            <div class="content">
                <p class="mb-0 font-600 color-highlight">WeatherGO</p>
                <h1>About Us</h1>
                <p>
                    Welcome to our website! We are your one-stop destination for easy navigation, weather updates, and a touch of music to make your journey smooth and enjoyable. With our user-friendly features, we aim to simplify your travel experience. With our navigation feature, you can effortlessly find the best routes and receive step-by-step directions to reach your destination hassle-free. Say goodbye to getting lost and hello to stress-free travel. Stay informed about the weather conditions with our real-time weather updates. Check the forecast, be prepared for any changes, and make informed decisions for your trip. To add a touch of joy to your journey, we offer a music feature. Create personalized playlists or explore our curated collections to enjoy your favorite tunes as you travel. Our commitment is to make your travel experience easier, more convenient, and enjoyable. We continuously strive to enhance our platform and provide you with the best navigation, weather, and music features.
                </p>        
            </div>
        </div>
    
        <div class="row me-0 ms-0 mb-0">
            <div class="col-4 pe-0 ps-0">
                <div class="card card-style">
                    <img src="{{asset('images/orang (3).png')}}" class="img-fluid">
                    <div class="content pb-0">
                        <p class="mb-n1 color-highlight font-600">Anisa</p>
                        <h1>Project Manager</h1>
                        <p class="mb-0">Responsible for planning, organizing, controlling and managing the entire project so that the project runs smoothly and successfully.</p>
                    </div>            
                </div>        
            </div>
            <div class="col-4 pe-0 ps-0">
                <div class="card card-style">
                    <img src="{{asset('images/orang (1).png')}}" class="img-fluid">
                    <div class="content pb-0">
                        <p class="mb-n1 color-highlight font-600">Fahreza, Afif, Daffa, Raissa, Pradika</p>
                        <h1>Programmer</h1>
                        <p class="mb-0">mCreating instructions and program integration with the backend is related to data, and the frontend is related to the appearance of the program.</p>
                    </div>            
                </div>        
            </div>
            <div class="col-4 ps-0 pe-0">
                <div class="card card-style">
                    <img src="{{asset('images/orang (2).png')}}" class="img-fluid">
                    <div class="content pb-0">
                        <p class="mb-n1 color-highlight font-600">Ariq</p>
                        <h1>Analysis</h1>
                        <p class="mb-0">Develop detailed solution plans, such as functional specifications and system design, that meet business requirements and technical projects.</p>
                    </div>            
                </div>        
            </div>
        </div>
 
        <div class="card card-style">
            <div class="content">
                <p class="mb-0 font-600 color-highlight">A very short bio</p>
                <h1>Our Values</h1>
                <p>
                    Enabled is a business powered by 2 folks just like you who aim 
                    to create beautiful mobile interfaces and treat customers like we love to be treated.
                </p>
                            
                <div class="d-flex mb-4">
                    <div class="align-self-center"><i class="fa fa-code color-highlight fa-4x icon-70 text-center"></i></div>
                    <div class="me-auto ps-4">
                        <h4>Quality Code</h4>
                        <p>
                            We create products we want to use for ourselves and that make us proud
                        </p>
                    </div>
                </div>
                            
                <div class="d-flex mb-4">
                    <div class="align-self-center"><i class="fa fa-life-ring color-orange-dark fa-4x icon-70 text-center"></i></div>
                    <div class="me-auto ps-4">
                        <h4>Hands on Support</h4>
                        <p>
                            We treat our customers like we like to be treated. We're always here for you!
                        </p>
                    </div>
                </div>
            
                <div class="d-flex">
                    <div class="align-self-center"><i class="fa fa-trophy color-yellow-dark fa-4x icon-70 text-center"></i></div>
                    <div class="me-auto ps-4">
                        <h4>Elite Care</h4>
                        <p>
                            We became elite because we cared about our customers and products
                        </p>
                    </div>
                </div>
            
            </div>
        </div>
        
        <div class="container-fluid fact bg-dark my-5 py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-check fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">99%</h2>
                        <p class="text-white mb-0">User Satisfaction</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Active User</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">98%</h2>
                        <p class="text-white mb-0">Availability and Accuracy of Information</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-car fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">99%</h2>
                        <p class="text-white mb-0">Speed and Performance</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content">
                <p class="mb-0 font-600 color-highlight">Let's connect</p>
                <h1>We're very Social</h1>
                <p>
                    We're very social and always love to keep in touch with our customers. Along our 11 year journey we've made
                    tones of awesome friends.
                </p>        
            </div>
        </div>

        
        <div class="row px-3">
            <div class="col-6 p-0">
                <a href="#" class="card card-style me-1 mb-2 bg-facebook p-3">
                    <i class="fab fa-facebook fa-3x color-white text-center"></i>
                    <p class="font-11 text-center pt-2 mb-0 color-white">FACEBOOK</p>
                </a>
            </div>
            <div class="col-6 p-0">
                <a href="#" class="card card-style ms-1 mb-2 bg-twitter p-3">
                    <i class="fab fa-twitter fa-3x color-white text-center"></i>
                    <p class="font-11 text-center pt-2 mb-0 color-white">TWITTER</p>
                </a>
            </div>
            <div class="col-6 p-0">
                <a href="#" class="card card-style me-1 mb-0 bg-instagram p-3">
                    <i class="fab fa-instagram fa-3x color-white text-center"></i>
                    <p class="font-11 text-center pt-2 mb-0 color-white">INSTAGRAM</p>
                </a>
            </div>
            <div class="col-6 p-0">
                <a href="#" class="card card-style ms-1 mb-0 bg-green-dark p-3">
                    <i class="fa fa-envelope fa-3x color-white text-center"></i>
                    <p class="font-11 text-center pt-2 mb-0 color-white">EMAIL</p>
                </a>
            </div>
        </div>


    </div>
    <!-- Page content ends here-->
    
    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="{{route('main')}}" data-menu-width="280" data-menu-active="nav-pages"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="{{route('colors')}}" data-menu-height="480"></div> 
     
    
</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>

{{-- <!DOCTYPE HTML>
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
    
    <div class="header header-auto-show header-fixed header-logo-center">
        <a href="{{route('about')}}" class="header-title">About Us</a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i class="fas fa-share-alt"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Features</span></a>
        <a href="index-pages.html" class="active-nav"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="{{route('home')}}" class="circle-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
    
    <div class="page-title page-title-fixed">
        <h1>About Us</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
        
    <div class="page-content">
        
        <div class="card card-style bg-1" data-card-height="400">
            <div class="card-top text-center">
                <h1 class="color-white text-center font-22 pt-3 mb-0">Greetings from</h1>
                <h1 class="color-white font-40">Enabled</h1>
            </div>
            <div class="card-bottom text-center">
                <p class="color-white font-15 opacity-70 px-4">
                    We're the only Elite Mobile Author on Envato Market, creating amazing Mobile Products ever since 2009 only for you!
                </p>
            </div>
            
            <div class="card-overlay bg-gradient"></div>
        </div>
        
        
        
        <div class="card card-style">
            <div class="content">
                <p class="mb-0 font-600 color-highlight">A very short biography</p>
                <h1>Who we are?</h1>
                <p>
                    Enabled is a business powered by 2 folks just like you who aim 
                    to create beautiful mobile interfaces and treat customers like we love to be treated.
                </p>        
            </div>
        </div>
        
        <div class="row mb-0">
            <div class="col-6 pe-0">
                <div class="card card-style">
                    <img src="{{asset('/images/pictures/16t.jpg')}}" class="img-fluid">
                    <div class="p-2">
                        <p class="font-600 color-highlight mb-n2">Development</p>
                        <h4 class="pt-2">Mr. Enabled</h4>
                        <p class="mb-2">
                            Husband and front end developer at Enabled.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 ps-0">
                <div class="card card-style">
                    <img data-src="{{asset('images/pictures/2t.jpg"')}} class="img-fluid">
                    <div class="p-2">
                        <p class="font-600 color-highlight mb-n2">Marketing</p>
                        <h4 class="pt-2">Mrs. Enabled</h4>
                        <p class="mb-2">
                            Wife and Marketing Specialist at Enabled
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content">
                <p class="mb-0 font-600 color-highlight">A very short bio</p>
                <h1>Our Values</h1>
                <p>
                    Enabled is a business powered by 2 folks just like you who aim 
                    to create beautiful mobile interfaces and treat customers like we love to be treated.
                </p>
                            
                <div class="d-flex mb-4">
                    <div class="align-self-center"><i class="fa fa-code color-highlight fa-4x icon-70 text-center"></i></div>
                    <div class="me-auto ps-4">
                        <h4>Quality Code</h4>
                        <p>
                            We create products we want to use for ourselves and that make us proud
                        </p>
                    </div>
                </div>
                            
                <div class="d-flex mb-4">
                    <div class="align-self-center"><i class="fa fa-life-ring color-orange-dark fa-4x icon-70 text-center"></i></div>
                    <div class="me-auto ps-4">
                        <h4>Hands on Support</h4>
                        <p>
                            We treat our customers like we like to be treated. We're always here for you!
                        </p>
                    </div>
                </div>
            
                <div class="d-flex">
                    <div class="align-self-center"><i class="fa fa-trophy color-yellow-dark fa-4x icon-70 text-center"></i></div>
                    <div class="me-auto ps-4">
                        <h4>Elite Care</h4>
                        <p>
                            We became elite because we cared about our customers and products
                        </p>
                    </div>
                </div>
            
            </div>
        </div>
        
        
        <div class="card card-style">
            <div class="content">
                <p class="mb-0 font-600 color-highlight">Let's connect</p>
                <h1>We're very Social</h1>
                <p>
                    We're very social and always love to keep in touch with our customers. Along our 11 year journey we've made
                    tones of awesome friends.
                </p>        
            </div>
        </div>
        
        <div class="row px-3">
            <div class="col-6 p-0">
                <a href="#" class="card card-style me-1 mb-2 bg-facebook p-3">
                    <i class="fab fa-facebook fa-3x color-white text-center"></i>
                    <p class="font-11 text-center pt-2 mb-0 color-white">enabled.labs</p>
                </a>
            </div>
            <div class="col-6 p-0">
                <a href="#" class="card card-style ms-1 mb-2 bg-twitter p-3">
                    <i class="fab fa-twitter fa-3x color-white text-center"></i>
                    <p class="font-11 text-center pt-2 mb-0 color-white">@iEnabled</p>
                </a>
            </div>
            <div class="col-6 p-0">
                <a href="#" class="card card-style me-1 mb-0 bg-instagram p-3">
                    <i class="fab fa-instagram fa-3x color-white text-center"></i>
                    <p class="font-11 text-center pt-2 mb-0 color-white">enabled.labs</p>
                </a>
            </div>
            <div class="col-6 p-0">
                <a href="#" class="card card-style ms-1 mb-0 bg-green-dark p-3">
                    <i class="fa fa-envelope fa-3x color-white text-center"></i>
                    <p class="font-11 text-center pt-2 mb-0 color-white">name@domain.com</p>
                </a>
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
</body> --}}
