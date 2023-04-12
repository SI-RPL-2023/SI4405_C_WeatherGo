<div class="card rounded-0 bg-6" data-card-height="150">
    <div class="card-top">
        <a href="#" class="close-menu float-end me-2 text-center mt-3 icon-40 notch-clear"><i class="fa fa-times color-white"></i></a>
    </div>
    <div class="card-bottom">
        <h1 class="color-white ps-3 mb-n1 font-28">WeatherGO</h1>
        <p class="mb-2 ps-3 font-12 color-white opacity-50">Enjoy your Ride!</p>
    </div>
    <div class="card-overlay bg-gradient"></div>
</div>
<div class="mt-4"></div>
<h6 class="menu-divider">Library</h6>
<div class="list-group list-custom-small list-menu">
    <a id="nav-pages" href="{{route('about')}}">
        <i class="fa fa-heart gradient-red color-white"></i>
        <span>About Us</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a id="nav-welcome" href="{{route('home')}}">
        <i class="fa fa-home gradient-green color-white"></i>
        <span>Homepages</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a id="nav-components" href="{{route('profile')}}">
        <i class="fa fa-cog gradient-blue color-white"></i>
        <span>Account</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a id="nav-pages" href="https://timeline.google.com/maps/timeline?hl=en&authuser=0&pli=1&rapt=AEjHL4MPnuDuKxJK938FR1ZYdnZxZA4wm2ELbhVFEASy8solDsMq6ukbJOhUBuSsQB_GcFFY8ZGMdMjJnJxxYm29ngFk1c5VCw&pb=!1m2!1m1!1s">
        <i class="fa fa-file gradient-brown color-white"></i>
        <span>History</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a id="nav-media" href="{{route('galery')}}">
        <i class="fa fa-camera gradient-magenta color-white"></i>
        <span>Galery</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a id="nav-contact" href="page-contact.html">
        <i class="fa fa-envelope gradient-teal color-white"></i>
        <span>Contact</span>
        <i class="fa fa-angle-right"></i>
    </a>
    @if (Auth::user()->role == '1')
        <a id="nav-contact" href="{{route('admin')}}">
            <i class="fa fa-envelope gradient-teal color-white"></i>
            <span>Admin</span>
            <i class="fa fa-angle-right"></i>
        </a>
    @endif
    
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
<h6 class="menu-divider mt-4">Settings</h6>
<div class="list-group list-custom-small list-menu">
    <a href="#" data-menu="menu-colors">
        <i class="fa fa-brush gradient-highlight color-white"></i>
        <span>Highlights</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="#" data-toggle-theme="" data-trigger-switch="switch-dark-mode">
        <i class="fa fa-moon gradient-dark color-white"></i>
        <span>Dark Mode</span>
        <div class="custom-control small-switch ios-switch">
            <input data-toggle-theme type="checkbox" class="ios-input" id="toggle-dark-menu">
            <label class="custom-control-label" for="toggle-dark-menu"></label>
        </div>
    </a>
</div>
<h6 class="menu-divider mt-4">Contacts Admin's</h6>
<div class="list-group list-custom-small list-menu">
    <a href="https://wa.me/6281331930455?text=Hello+admin..">
        <img src="images/avatars/2xs.png">
        <span>Fahreza Anggriantaka</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="https://wa.me/6289514902112?text=Hello+admin..">
        <img src="images/avatars/2xs.png">
        <span>Bevan Pradika Putranto</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="https://wa.me/6285161315707?text=Hello+admin..">
        <img src="images/avatars/2xs.png">
        <span>Muhammad Afif Aminuddin</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="https://wa.me/6282281855240?text=Hello+admin..">
        <img src="images/avatars/2xs.png">
        <span>Ariq Aqilah</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="https://wa.me/6281214654332?text=Hello+admin..">
        <img src="images/avatars/2xs.png">
        <span>Muhammad Daffa Aulia R.</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="https://wa.me/6281337460402?text=Hello+admin..">
        <img src="images/avatars/2xs.png">
        <span>Anisa Wahyu Pratiwi</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="https://wa.me/6281344590489?text=Hello+admin..">
        <img src="images/avatars/2xs.png">
        <span>Raissa Ardelia</span>
        <i class="fa fa-angle-right"></i>
    </a>
</div>
<h6 class="menu-divider font-10 mt-4">Made with by Kelompok 3 RPL <span class="copyright-year">2023</span></h6>
