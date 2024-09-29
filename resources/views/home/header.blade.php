<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo2.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{url('/')}}" class="active">{{ __('header.home') }}</a></li>
                        <li><a href="{{url('explore')}}">{{ __('header.explore') }}</a></li>


                        @if (Route::has('login'))

                        @auth
                        <x-app-layout>
                        </x-app-layout>
                        @else
                        <li><a href="{{ route('login') }}">{{ __('header.login') }}</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">{{ __('header.re') }}</a></li>
                        @endif
                        @endauth
                </nav>
                @endif
                <li>
    <a class="language-switch" href="{{ url('lang/en') }}">English</a> |
    <a class="language-switch" href="{{ url('lang/ar') }}">العربية</a>
</li>



                </ul>

                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>