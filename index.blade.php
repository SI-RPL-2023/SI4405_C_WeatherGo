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

<body class="theme-light" data-highlight="highlight-red">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">
    
    <div class="header header-auto-show header-fixed header-logo-center">
        <a href="{{route('home')}}" class="header-title">WeatherGO</a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i class="fas fa-share-alt"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="https://www.google.com/maps"><i class="fa fa-layer-group"></i><span>Maps</span></a>
        <a href="https://timeline.google.com/maps/timeline?hl=en&authuser=0&pli=1&rapt=AEjHL4MPnuDuKxJK938FR1ZYdnZxZA4wm2ELbhVFEASy8solDsMq6ukbJOhUBuSsQB_GcFFY8ZGMdMjJnJxxYm29ngFk1c5VCw&pb=!1m2!1m1!1s"><i class="fa fa-file"></i><span>History</span></a>
        <a href="{{route('home')}}" class="circle-nav active-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="{{route('galery')}}"><i class="fa fa-image"></i><span>Galery</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>

    <div class="page-title page-title-fixed">
        <h1>WeatherGO</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>

    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-width="280" data-menu-active="nav-welcome" data-menu-load="{{route('main')}}"></div>
    <div id="menu-share" class="menu menu-box-bottom rounded-m"  data-menu-load="menu-share.blade.php" data-menu-height="370"> </div>
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="{{route('colors')}}" data-menu-height="480"></div>


    <div class="page-content">

        <div class="splide double-slider visible-slider slider-no-dots" id="double-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide ps-3">
                        <div data-card-height="220" class="card  shadow-xl rounded-m bg-6">
                            <div class="card-bottom text-center">
                                <h4 class="color-white font-800 mb-3">Spotify</h4>
                            </div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide ps-3">
                        <div data-card-height="220" class="card  shadow-xl rounded-m bg-19">
                            <div class="card-bottom text-center">
                                <h4 class="color-white font-800 mb-3">Maps</h4>
                            </div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide ps-3">
                        <div data-card-height="220" class="card  shadow-xl rounded-m bg-31">
                            <div class="card-bottom text-center">
                                <h4 class="color-white font-800 mb-3">Weather</h4>
                            </div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row me-0 ms-0">
            <div class="col-8 pt-1">
                <div class="card card-style shadow-xl">
                    <div class="content">
                        <p class="color-highlight font-600 mb-n1">Riding Solution</p>
                        <h1 class="font-24 font-700 mb-2">WeatherGO<i class="fa fa-star mt-n2 font-30 color-yellow-dark float-end me-2 scale-box"></i></h1>
                        <p class="mb-1">
                            This application will make it easier for users to find out the route to the destination. in addition, users will also get developments regarding the weather in an area.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 pt-1">
                <div class="card card-style shadow-xl">
                    <div class="content">
                        <center><div id="openweathermap-widget-14"></div></center>
                            <script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 14,cityid: '1650357',appid: 'c222fd5d12e787f24c4b06841b216464',units: 'metric',containerid: 'openweathermap-widget-14',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>
                            <a href="{{route('weather')}}" class="btn btn-sm rounded-s font-10 font-400 gradient-highlight btn-center-l">Check Weather</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="card card-style shadow-xl">
            <div class="row me-0 ms-0">
                <div class="col-6 pt-3">
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/37i9dQZF1DXa2EiKmMLhFD?utm_source=generator" width="100%" height="456" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    <p class="mb-n1 color-highlight font-600">Enjoy your music!</p>
                    <h1>Spotify</h1>
                    <p class="mb-1">Spotify is ready to completely you on your journey!</p>
                </div>
                <div class="col-6 pt-3" >
                    <iframe _ngcontent-ng-c2225116341="" allow="fullscreen" aria-label="Interactive demo" class="cfc-height-full cfc-width-full" sandboxuid="0" src="https://storage.googleapis.com/sb-demos/7ba76cbb-b4df-4886-9358-10e2779f6adb?GoogleAccessId=demo-creator@gmp-playground.iam.gserviceaccount.com&amp;Expires=1681026982&amp;Signature=kwM6XmPGF8x5zgUZJwHpRE%2F7wM9XuuWbTfNJSbw4IOjOWncTzDPkDvIi0XJnk9pI51aA9TCuDMzLihx%2F83KBLCdG1n64ozzV4vhO%2BKkRDouE3UqtwVVYqQmRm11lMqlymPwPS9ghp7XTMxohdU%2FypKWHpGZJ%2F1cBAk3G6Y3aCs%2B%2BTSWqev1u4WLak%2FJ1%2BztxeYe0JmTR4Zt7x9BPmNi5EZw7pulqcjaSbZuCmSACwhFbGQHKsVrW1enUwfJmwibggHWTSa%2BQAoEmaE5UBxp9%2B%2BxmSuoaHWsTuqTlYiqWPzAfVZzzxJw0QGzmOzd69suJPIw2SfGwa0SjmbOt6NSuYA%3D%3D" sandbox="allow-same-origin allow-scripts allow-forms allow-popups allow-popups-to-escape-sandbox" style="border-radius:12px" width="100%" height="456"></iframe>
                    <p class="mb-n1 color-highlight font-600">Location</p>
                    <h1>Maps</h1>
                    <p class="mb-1">You can choose your destination!</p>
                </div>        
            </div> 
        </div>   


        <!-- <div class="row mb-0">
            <a href="#" class="col-6 pe-0">
                <div class="card mr-0 card-style">
                    <div class="d-flex pt-3 pb-3">
                        <div class="align-self-center">
                            <i class="fa fa-home color-green-light ms-3 font-34 mt-1"></i>
                        </div>
                        <div class="align-self-center">
                            <h5 class="ps-2 ms-1 mb-0">WeatherGO</h5>
                        </div>
                    </div>
                    <p class="px-3">
                        Enjoy WeatherGO to completely you on your journey.
                    </p>
                </div>
            </a>
            <a href="#" class="col-6 ps-0">
                <div class="card ml-0 card-style">
                    <div class="d-flex pt-3 pb-3">
                        <div class="align-self-center">
                            <i class="fa fa-cog color-blue-dark ms-3 font-34 mt-1"></i>
                        </div>
                        <div class="align-self-center">
                            <h5 class="ps-2 ms-1 mb-0">Operation</h5>
                        </div>
                    </div>
                    <p class="px-3">
                        Powered by Kelompok 3 Rekayasa Perangkat Lunak Operation.
                    </p>
                </div>
            </a>
        </div> -->

        <a href="#" data-toggle-theme>
            <div class="card card-style">
                <div class="d-flex pt-3 mt-1 mb-2 pb-2">
                    <div class="align-self-center">
                        <i class="color-icon-gray color-gray-dark font-30 icon-40 text-center fa fa-moon ms-3 show-on-theme-light"></i>
                        <i class="color-icon-yellow color-yellow-dark font-30 icon-40 text-center fa fa-sun ms-3 show-on-theme-dark"></i>
                    </div>
                    <div class="align-self-center">
                        <p class="ps-2 ms-1 color-highlight font-500 mb-n1 mt-n2">Tap to Enable</p>
                        <h4 class="show-on-theme-light ps-2 ms-1 mb-0">Dark Mode</h4>
                        <h4 class="show-on-theme-dark ps-2 ms-1 mb-0">Light Mode</h4>
                    </div>
                    <div class="ms-auto align-self-center mt-n2">
                        <div class="custom-control small-switch ios-switch me-3 mt-n2">
                            <input data-toggle-theme type="checkbox" class="ios-input" id="toggle-dark-home">
                            <label class="custom-control-label" for="toggle-dark-home"></label>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <div class="card card-style">
            <div class="content">
                <p class="font-600 color-highlight mb-n1">Extra Information</p>
                <h3>Order Notes</h3>
                <p>
                    Tell us if there's something you don't want us to forget
                </p>
                <form action="{{route('storeFeedback')}}" method="post">
                    @csrf
                <div class="input-style has-borders input-style-always-active no-icon mb-4">
                    <textarea id="message" name="message" placeholder="" style="height:150px;"></textarea>
                    <label for="message" class="color-highlight">Enter your Message</label>
                    <em class="mt-n3">(required)</em>
                </div>
                <button type="submit" class="btn btn-m btn-full rounded-s shadow-xl text-uppercase font-900 bg-highlight">Send</button>
            </form>
            </div>
        </div>

        <div data-menu-load="{{route('footer')}}"></div>


    </div>
    <!-- End of Page Content-->
    <!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->

    <!-- Menu Share -->
    <div id="menu-share" class="menu menu-box-bottom menu-box-detached">
        <div class="menu-title mt-n1"><h1>Share the Love</h1><p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="content mb-0">
            <div class="divider mb-0"></div>
            <div class="list-group list-custom-small list-icon-0">
                <a href="auto_generated" class="shareToFacebook external-link">
                    <i class="font-18 fab fa-facebook-square color-facebook"></i>
                    <span class="font-13">Facebook</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="auto_generated" class="shareToTwitter external-link">
                    <i class="font-18 fab fa-twitter-square color-twitter"></i>
                    <span class="font-13">Twitter</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="auto_generated" class="shareToLinkedIn external-link">
                    <i class="font-18 fab fa-linkedin color-linkedin"></i>
                    <span class="font-13">LinkedIn</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="auto_generated" class="shareToWhatsApp external-link">
                    <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                    <span class="font-13">WhatsApp</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="auto_generated" class="shareToMail external-link border-0">
                    <i class="font-18 fa fa-envelope-square color-mail"></i>
                    <span class="font-13">Email</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Be sure this is on your main visiting page, for example, the index.html page-->
    <!-- Install Prompt for Android -->
    <div id="menu-install-pwa-android" class="menu menu-box-bottom rounded-m">
        <img class="mx-auto mt-4 rounded-m" src="app/icons/icon-128x128.png" alt="img" width="90">
        <h4 class="text-center mt-4 mb-2">WeatherGO on your Home Screen</h4>
        <p class="text-center boxed-text-xl">
            Install WeatherGO on your home screen, and access it just like a regular app. It really is that simple!
        </p>
        <div class="boxed-text-l">
            <a href="#" class="pwa-install mx-auto btn btn-m font-600 bg-highlight">Add to Home Screen</a>
            <a href="#" class="pwa-dismiss close-menu btn-full mt-3 pt-2 text-center text-uppercase font-600 color-red-light font-12 pb-4 mb-3">Maybe later</a>
        </div>
    </div>

    <!-- Install instructions for iOS -->
    <div id="menu-install-pwa-ios" class="menu menu-box-bottom rounded-m">
        <div class="boxed-text-xl top-25">
            <img class="mx-auto mt-4 rounded-m" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="text-center mt-4 mb-2">WeatherGO on your Home Screen</h4>
            <p class="text-center ms-3 me-3">
                Install WeatherGO on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
            </p>
            <a href="#" class="pwa-dismiss close-menu btn-full mt-3 text-center text-uppercase font-700 color-red-light opacity-90 font-110 pb-5">Maybe later</a>
        </div>
    </div>

</div>

<script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>

</body>
</html>
