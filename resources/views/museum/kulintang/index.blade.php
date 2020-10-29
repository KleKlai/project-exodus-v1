<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/images/nav.ico') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        {{-- Font --}}
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"rel="stylesheet"/>

    </head>
    <body>
        {{-- Navigation --}}

        <div class="container-fluid cover-picture background-image" style="background-image: url('/images/museums/Kulintang.png')">

            <div class="nav-container">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.40);">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                            {{--  <li class="nav-item">
                                <a class="nav-link" href="{{ route('bakaw.index') }}">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/artworks">Artworks <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/artists">Artists</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galleries">Galleries</a>
                            </li>  --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Museum
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('bakaw.index') }}">Bakaw</a>
                                    <a class="dropdown-item" href="{{ route('balangay.index') }}">Balangay</a>
                                    <a class="dropdown-item" href="{{ route('dabakan.index') }}">Dabakan</a>
                                    <a class="dropdown-item" href="{{ route('heart.index') }}">Heart</a>
                                    <a class="dropdown-item" href="{{ route('kaban.index') }}">Kaban</a>
                                    <a class="dropdown-item" href="{{ route('kulintang.index') }}">Kulintang</a>
                                    <a class="dropdown-item" href="{{ route('lamin.index') }}">Lamin</a>
                                    <a class="dropdown-item" href="{{ route('tambol.index') }}">Talaandig</a>
                                    <a class="dropdown-item" href="{{ route('lullaby.index') }}">Uyayi</a>
                                    <a class="dropdown-item" href="{{ route('vinta.index') }}">Vinta</a>
                                </div>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @auth

                                @can('read art')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('art.index') }}">My Artworks</a>
                                </li>
                                @endcan
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('my.profile', Auth::user()) }}">
                                            {{ __('Profile') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fa fa-bell"></i>
                                        <span class="badge badge-secondary">{{ auth()->user()->unreadNotifications->count() }}</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        @forelse (auth()->user()->unreadNotifications as $notification)
                                            <!-- item-->
                                            <a href="{{ route('notification.read', $notification) }}" class="dropdown-item" data-toggle="tooltip" data-placement="top" title="{{ $notification->created_at->format('l, F d, Y - h:i A') }}">
                                                <p class="font-13"><b>{{ $notification->data['subject'] }}</b> {{ Str::limit($notification->data['body'], 25, '...') }}</p>
                                                <p class="text-muted mb-0">
                                                    <small>{{ $notification->created_at->diffForHumans() }}</small>
                                                </p>
                                            </a>
                                        @empty
                                            <div class="text-center">
                                                <a href="#" class="dropdown-item">
                                                    No notification yet!
                                                </a>
                                            </div>
                                        @endforelse
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('notification.view') }}" class="text-decoration-none float-left ml-2">See All</a>

                                        @if(auth()->user()->unreadNotifications->count())
                                            <a href="{{ route('notification.clear') }}" class="text-decoration-none float-right mr-2">Mark All as Read</a>
                                        @endif
                                    </div>
                                </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @endauth
                        </ul>

                    </div>
                </nav>
            </div>


        </div>


        {{-- Content --}}
        <div class="container">
            <div class="h-divider" id="featuredGalleries"></div>

            <div class="title">KULINTANG MUSEUM</div>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

            <div class="h-divider" id="featuredGalleries"></div>

            <div class="title">VISIT MINDANAO MUSEUMS</div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="{{ route('bakaw.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/BakawCover.png');">
                            <p class="picture-inner-title">BAKAW</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ route('balangay.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/BalangayCover.png');">
                            <p class="picture-inner-title">BALANGAY</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ route('dabakan.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/DabakanCover.png');">
                            <p class="picture-inner-title">DABAKAN</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ route('heart.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/HeartCover.png');">
                            <p class="picture-inner-title">HEART</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ route('kaban.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/KabanCover.png');">
                            <p class="picture-inner-title">KABAN</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ route('kulintang.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/KulintangCover.png');">
                            <p class="picture-inner-title">KULINTANG</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ route('lamin.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/LaminCover.png');">
                            <p class="picture-inner-title">LAMIN</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ route('tambol.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/TalaandigCover.png');">
                            <p class="picture-inner-title">TALAANDIG</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ route('lullaby.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/UyayiCover.png');">
                            <p class="picture-inner-title">UYAYI</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4"></div>
                <div class="col-md-4 mb-4">
                    <a href="{{ route('vinta.index') }}">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/VintaCover.png');">
                            <p class="picture-inner-title">VINTA</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="newsletter">
                <div class="container row">
                    <div class="col-md-10">
                        <span class="text">Get the latest art stories and collections by simply 'Subscribe'</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-outline-dark text-white border-white">Subcribe</button>

                    </div>
                </div>
            </div>

        </div>

        <footer class="footer-area footer--light">
            <div class="footer-big container ">
                <!-- start .container -->
                <div class="row" style="margin-left: 0 !important; margin-right: 0 !important;">
                    <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <div class="footer-menu footer-menu--1">
                        <h4 class="footer-widget-title"><b>Mindanao Art</b></h4>
                            <a class="link" href="{{ route('art.index') }}">Artworks</a>
                            <br>
                            <a class="link" href="{{ route('landing.artists') }}">Artists</a>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <div class="footer-menu footer-menu--1">
                        <h4 class="footer-widget-title"><b>Museums</b></h4>
                            <a class="link" href="{{ route('bakaw.index') }}">Bakaw</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="link" href="{{ route('balangay.index') }}">Balangay</a>
                            <br>
                            <a class="link" href="{{ route('dabakan.index') }}">Dabakan</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="link" href="{{ route('heart.index') }}">Heart</a>
                            <br>
                            <a class="link" href="{{ route('kaban.index') }}">Kaban</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="link" href="{{ route('kulintang.index') }}">Kulintang</a>
                            <br>
                            <a class="link" href="{{ route('lamin.index') }}">Lamin</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="link" href="{{ route('tambol.index') }}">Talaandig</a>
                            <br>
                            <a class="link" href="{{ route('lullaby.index') }}">Uyayi</a>
                            <br>
                            <a class="link" href="{{ route('vinta.index') }}">Vinta</a>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                    </div>

                    <div class="col-md-2 col-sm-3">
                    <div class="footer-widget">
                        <div class="footer-menu footer-menu--1">
                            <br>
                            <a class="link" href="#">Artist Handbook</a>
                            <br>
                            <a class="link" href="#">User Guides</a>
                            <br>
                            <a class="link" href="#">About us</a>
                            <br>
                            <a class="link" href="{{ route('ticket.index') }}">Support</a>
                            <br>
                            <a class="link" href="/faqs">FAQs</a>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-md-4" style="text-align: right;">
                        <div class="footer-widget">
                            <div class="footer-menu footer-menu--1">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                                secretariat@mindanaoart.com
                                <br>
                                <h6><b>Copyright 2020. Mindanao Art</b></h6>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->
                </div>
                <!-- end /.row -->
                <!-- end /.container -->
            </div>
        </footer>


    </body>
</html>
