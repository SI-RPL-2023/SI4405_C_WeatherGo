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

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
        crossorigin=""></script>
        </head>
    
<body class="theme-light">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-center header-auto-show">
        <a href="#" class="header-title">Contact</a>
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
        <h1>Contact</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>

    <div class="card card-fixed mb-n5" data-card-height="350">
        <div id="map" style="width: max; height: 400px;"></div>
        <script>

	        const map = L.map('map').setView([-6.972929, 107.632301], 15);

	        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		        maxZoom: 19,
		        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	        }).addTo(map);

            var marker = L.marker([-6.973021, 107.631834]).addTo(map);

        </script>
    </div>
    <div class="card card-clear" data-card-height="350"></div>


    <div class="page-content pb-3">

        <div class="card card-full rounded-m pb-4">
            <div class="drag-line"></div>

            <div class="content">
                <p class="font-600 mb-n1 color-highlight">We're here</p>
                <h1>Contact Us</h1>
                <p>
                    Fully functional contact form, just drop your message and we'll get back to you in the shortest possible time.
                </p>
            </div>

            <div class="form-sent disabled">
                <div class="card card-style">
                    <div class="shadow-l rounded-m gradient-green me-n1 ms-n1 mb-n1 ">
                        <h1 class="color-white text-center pt-4"><i class="fa fa-check-circle fa-3x shadow-s scale-box rounded-circle"></i></h1>
                        <h2 class="color-white bold text-center pt-3">Message Sent</h2>
                        <p class="color-white pb-4 text-center mt-n2 mb-0">We'll get back to you shortly.</p>
                    </div>
                </div>

                <div class="card card-style">
                    <div class="content text-center">
                        <h2>Meanwhile, let's get social!</h2>
                        <p class="boxed-text-xl">
                            Here are our social media platforms! Follow us for the latest updates or just say hello!
                        </p>
                        <a href="#" class="icon icon-xl shadow-xl rounded-xl bg-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon icon-xl shadow-xl rounded-xl bg-instagram ms-3 me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon icon-xl shadow-xl rounded-xl bg-twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div id="validator-name" class="disabled bg-red-dark content rounded-sm shadow-xl text-center line-height-xs py-3 text-uppercase mb-0 font-700">Name is required!</div>
            <div id="validator-mail1" class="disabled bg-red-dark content rounded-sm shadow-xl text-center line-height-xs py-3 text-uppercase mb-0 font-700">Email Address is required!</div>
            <div id="validator-mail2" class="disabled bg-red-dark content rounded-sm shadow-xl text-center line-height-xs py-3 text-uppercase mb-0 font-700">Invalid email Address!</div>
            <div id="validator-text" class="disabled bg-red-dark content rounded-sm shadow-xl text-center line-height-xs py-3 text-uppercase mb-0 font-700">Please enter your message!</div>

            <div class="card contact-form">
                <div class="content">
                    <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                        <fieldset>
                            <div class="form-field form-name">
                                <label class="contactNameField color-theme" for="contactNameField">Name:<span>(required)</span></label>
                                <input type="text" name="contactNameField" value="" class="round-small" id="contactNameField" />
                            </div>
                            <div class="form-field form-email">
                                <label class="contactEmailField color-theme" for="contactEmailField">Email:<span>(required)</span></label>
                                <input type="text" name="contactEmailField" value="" class="round-small" id="contactEmailField" />
                            </div>
                            <div class="form-field form-text">
                                <label class="contactMessageTextarea color-theme" for="contactMessageTextarea">Message:<span>(required)</span></label>
                                <textarea name="contactMessageTextarea" class="round-small" id="contactMessageTextarea"></textarea>
                            </div>
                            <div class="form-button">
                                <input type="submit" class="btn bg-highlight text-uppercase font-900 btn-m btn-full rounded-sm  shadow-xl contactSubmitButton" value="Send Message" data-formId="contactForm" />
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="form-sent disabled">
                <div class="card card-style ">
                    <div class="shadow-l rounded-m gradient-green me-n1 ms-n1 mb-n1 ">
                        <h1 class="color-white text-center pt-4"><i class="fa fa-check-circle fa-3x shadow-s scale-box rounded-circle"></i></h1>
                        <h2 class="color-white bold text-center pt-3">Message Sent</h2>
                        <p class="color-white pb-4 text-center mt-n2 mb-0">We'll get back to you shortly.</p>
                    </div>
                </div>
            </div>

            <div class="content mt-0">
                <div class="divider"></div>

                <h3 class="font-700">Postal Information</h3>
                <p class="pb-0 mb-0">Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang,</p>
                <p class="pb-0 mb-0">Telkom University, Sukapura, Kec. Dayeuhkolot,</p>
                <p class="pb-0">Kabupaten Bandung, Jawa Barat 40257</p>

                <div class="divider"></div>

                {{-- <h3 class="font-700">Envato Headquarters</h3>
                <p class="pb-0 mb-0">121 King Street, Melbourne</p>
                <p class="pb-0 mb-0">PO Box 16122 Collins Street West</p>
                <p class="pb-0">Victoria 3000 Australia</p> --}}

                <div class="list-group list-custom-small">
                    <a href="tel:+62 813 3193 0455" class="external-link">
                        <i class="fa font-14 fa-phone color-phone"></i>
                        <span>+62 813 3193 0455</span>
                        <span class="badge bg-highlight">TAO TO CALL</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="mailto:weathergo@go.com" class="external-link">
                        <i class="fa font-14 fa-envelope color-mail"></i>
                        <span>weathergo@go.com</span>
                        <span class="badge bg-highlight">TAO TO MAIL</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#" class="external-link">
                        <i class="fab font-14 fa-facebook color-facebook"></i>
                        <span>WeatherGO</span>
                        <i class="fa fa-link"></i>
                    </a>
                    <a href="#" class="external-link">
                        <i class="fab font-14 fa-twitter-square color-twitter"></i>
                        <span>WeatherGO</span>
                        <i class="fa fa-link"></i>
                    </a>
                    <a href="#" class="border-0">
                        <i class="fab font-14 fa-linkedin color-linkedin"></i>
                        <span>WeatherGO</span>
                        <i class="fa fa-link"></i>
                    </a>

                </div>


            </div>
        </div>

    </div>
    
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