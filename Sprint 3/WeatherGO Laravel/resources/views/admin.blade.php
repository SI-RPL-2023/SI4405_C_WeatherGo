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

    <div class="card card-style bg-17 mt-3" data-card-height="160">
        <div class="card-bottom ps-3 pb-3">
            <h1 class="font-17 color-white mb-n3">Go Weather</h1>
            <h4 class="font-13 color-white mb-4 opacity-50">Latest Statistics</h4>
            <div class="d-flex">
                <div class="pe-3">
                    <h5 class="color-white">-</h5>
                    <h6 class="color-white opacity-60">Visits</h6>
                </div>
                <div class="pe-3">
                    <h5 class="color-white">{{$userCount}}</h5>
                    <h6 class="color-white opacity-60">Users</h6>
                </div>
                <div class="pe-3">
                    <h5 class="color-white">{{$feedbackCount}}</h5>
                    <h6 class="color-white opacity-60">Fe</h6>
                </div>
            </div>
        </div>
        <div class="card-overlay bg-black opacity-80"></div>
    </div>
    
    <div class="content mb-0 mt-3">
        <div class="row mb-0">
            <div class="col-6 pe-1">
                <div class="card card-style mx-0 mb-2 p-3">
                    <h6 class="font-14">Feedback Replied</h6>
                    <h3 class="color-green-dark mb-0">{{$feedbackAccept}}</h3>
                </div>
            </div>
            <div class="col-6 ps-1">
                <div class="card card-style mx-0 mb-2 p-3">
                    <h6 class="font-14">Feedback not Replied</h6>
                    <h3 class="color-red-dark mb-0">{{$feedbackNotAccept}}</h3>
                </div>
            </div>
        </div>
    </div>       
    
    <div class="content mt-0 mb-0">
        <div class="row mb-0">
            <div class="col-6">
                <div class="card mx-0 card-style" data-card-height="260">
                    <div class="content">
                        <h5 class="font-14 opacity-50">Average <a href="#" class="float-end color-highlight"><i class="fa fa-arrow-right"></i></a></h5>
                        <div class="divider mb-3"></div>

                        <div class="mb-4">
                            <h5>Memory<span class="opacity-30 float-end">30%</span></h5>
                            <div class="progress" style="height:8px;">
                                <div class="progress-bar border-0 bg-green-dark text-start ps-2" 
                                     role="progressbar" style="width: 30%" 
                                     aria-valuenow="10" aria-valuemin="0" 
                                     aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Storage<span class="opacity-30 float-end">70%</span></h5>
                            <div class="progress" style="height:8px;">
                                <div class="progress-bar border-0 bg-blue-dark text-start ps-2" 
                                     role="progressbar" style="width: 70%" 
                                     aria-valuenow="10" aria-valuemin="0" 
                                     aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h5>Trafic<span class="opacity-30 float-end">90%</span></h5>
                            <div class="progress" style="height:8px;">
                                <div class="progress-bar border-0 bg-yellow-dark text-start ps-2" 
                                     role="progressbar" style="width: 90%" 
                                     aria-valuenow="10" aria-valuemin="0" 
                                     aria-valuemax="100">
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mx-0 card-style" data-card-height="260">
                    <div class="content">
                        <h5 class="font-14 opacity-50">Running Website<a href="#" class="float-end color-highlight"><i class="fa fa-arrow-right"></i></a></h5>
                        <div class="divider mb-3"></div>
                    </div>
                    <div class="card-center text-center pb-4">
                        <span class="icon icon-xxl rounded-m gradient-highlight scale-box"><i class="fa fa-arrow-up rotate-45 font-30"></i></span>
                    </div>
                    <div class="card-bottom text-center">
                        <div class="content pb-1">
                            <h1 class="mb-n1">93%</h1>
                            <h5 class="opacity-30">3% Increase</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <div class="card card-style" style="padding: 10px">
        <div>
            <br>
    <h1>Feedback and Contact Us</h1>
    <table class="table dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
        <thead>
    <thead>
        <tr role="row"><th style="width: 19.5208px;" class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                No
            : activate to sort column descending">
                ID
            </th><th style="width: 149.667px;" class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                Nama Lengkap
            : activate to sort column ascending">
                Nama 
            </th><th style="width: 245.5px;" class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                Desa
            : activate to sort column ascending">
                Email
            </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                Kategori
            : activate to sort column ascending" style="width: 100.188px;">
                Message
            </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
            Kategori
        : activate to sort column ascending" style="width: 100.188px;">
            Action</th>
        </thead>
        <tbody> 
            @foreach ($feedback as $item)
            <tr role="row" class="odd">
                <th class="sorting_1">{{$item->id}}</th>
                <th>{{$user->where('id', $item->user_id)->first()->firstname}}</th>
                <th>{{$item->email}}</th>
                <th>{{$item->message}}</th>
                <th>
                    @if ($item->isReply == 0)
                        <a href="{{ url('reply',$item['id'])}}" class="btn bg-highlight"><span>Reply</span></a>
                        <a href="{{ url('delete',$item['id'])}}" class="btn btn-danger"><span>Delete</span></a>
                    </th>
                    @else
                        <a href="#" class="btn bg-highlight"><span>Replied</span></a>
                        <a href="{{ url('delete',$item['id'])}}" class="btn btn-danger"><span>Delete</span></a>
                    </th>    
                    @endif
                    
            </tr>
            @endforeach
        </tbody>                                                                                              
        </table></div>
    </div>
    
    

    <div data-menu-load="{{route('footer')}}"></div>

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
