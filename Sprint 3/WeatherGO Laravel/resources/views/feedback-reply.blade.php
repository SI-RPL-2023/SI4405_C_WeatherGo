<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>WeatherGO</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/css/fontawesome-all.min.css') }}">
    <link rel="manifest" href="{{ asset('_manifest.json') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app/icons/icon-192x192.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
</head>

<body class="theme-light" data-highlight="highlight-red">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <div class="header header-auto-show header-fixed header-logo-center">
            <a href="{{ route('home') }}" class="header-title">WeatherGo</a>
            <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i
                    class="fas fa-sun"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i
                    class="fas fa-moon"></i></a>
            <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i
                    class="fas fa-share-alt"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar-6">
            <a href="https://www.google.com/maps"><i class="fa fa-layer-group"></i><span>Maps</span></a>
            <a
                href="https://timeline.google.com/maps/timeline?hl=en&authuser=0&pli=1&rapt=AEjHL4MPnuDuKxJK938FR1ZYdnZxZA4wm2ELbhVFEASy8solDsMq6ukbJOhUBuSsQB_GcFFY8ZGMdMjJnJxxYm29ngFk1c5VCw&pb=!1m2!1m1!1s"><i
                    class="fa fa-file"></i><span>History</span></a>
            <a href="{{ route('home') }}" class="circle-nav active-nav"><i
                    class="fa fa-home"></i><span>Welcome</span></a>
            <a href="{{ route('galery') }}"><i class="fa fa-image"></i><span>Galery</span></a>
            <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
        </div>

        <div class="page-title page-title-fixed">
            <h1>WeatherGO</h1>
            <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i
                    class="fa fa-share-alt"></i></a>
            <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light"
                data-toggle-theme><i class="fa fa-moon"></i></a>
            <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark"
                data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
            <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i
                    class="fa fa-bars"></i></a>
        </div>
        <div class="page-title-clear"></div>

        <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-width="280" data-menu-active="nav-welcome"
            data-menu-load="{{ route('main') }}"></div>
        <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.blade.php"
            data-menu-height="370"> </div>
        <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="{{ route('colors') }}"
            data-menu-height="480"></div>

        <div class="card card-style" style="padding: 10px">
            <div>
                <br>
                <h1>Feedback Replied</h1>
                <table class="table dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid"
                    aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <thead>
                            <tr role="row">
                                <th style="width: 200px;" class="sorting sorting_asc" tabindex="0"
                                    aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label="
                No
            : activate to sort column descending">
                                    Date
                                </th>
                                <th style="width: 250px;" class="sorting" tabindex="0"
                                    aria-controls="dataTable" rowspan="1" colspan="1"
                                    aria-label="
                Nama Lengkap
            : activate to sort column ascending">
                                    Your Message
                                </th>
                                <th style="width: 250px;" class="sorting" tabindex="0" aria-controls="dataTable"
                                    rowspan="1" colspan="1"
                                    aria-label="
                Desa
            : activate to sort column ascending">
                                    Reply Message
                                </th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($reply as $item)
                        <tr role="row" class="odd">
                            <th>{{$feedback->where('id',$item->feedback_id)->first()->created_at}}</th>
                            <th>{{$feedback->where('id',$item->feedback_id)->first()->message}}</th>
                            <th>{{$item->reply_message}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div data-menu-load="{{ route('footer') }}"></div>

        <!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->

        <!-- Menu Share -->
        <div id="menu-share" class="menu menu-box-bottom menu-box-detached">
            <div class="menu-title mt-n1">
                <h1>Share the Love</h1>
                <p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#"
                    class="close-menu"><i class="fa fa-times"></i></a>
            </div>
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
                <a href="#"
                    class="pwa-dismiss close-menu btn-full mt-3 pt-2 text-center text-uppercase font-600 color-red-light font-12 pb-4 mb-3">Maybe
                    later</a>
            </div>
        </div>

        <!-- Install instructions for iOS -->
        <div id="menu-install-pwa-ios" class="menu menu-box-bottom rounded-m">
            <div class="boxed-text-xl top-25">
                <img class="mx-auto mt-4 rounded-m" src="app/icons/icon-128x128.png" alt="img" width="90">
                <h4 class="text-center mt-4 mb-2">WeatherGO on your Home Screen</h4>
                <p class="text-center ms-3 me-3">
                    Install WeatherGO on your home screen, and access it just like a regular app. Open your Safari menu
                    and tap "Add to Home Screen".
                </p>
                <a href="#"
                    class="pwa-dismiss close-menu btn-full mt-3 text-center text-uppercase font-700 color-red-light opacity-90 font-110 pb-5">Maybe
                    later</a>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="{{ asset('scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>

</body>

</html>
