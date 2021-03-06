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

        <div class="container-fluid cover-picture background-image" style="background-image: url('/images/museums/Balangay.png')">
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
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a>
                            </li>
                            @endauth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('landing.artworks') }}">Artworks <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('landing.artists') }}">Artists</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Galleries
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Agusan Artist Association (AAA)">Agusan Artists’ Association AAA</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Alampat Gallery">Alampat Gallery</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Datu Bago">Datu Bago Gallery</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Deanna Sipaco (DS) Foundation for the Differently-Abled, Inc.">Deanna Sipaco (DS) Foundation for the Differently-Abled, Inc.</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Gall Down South">Gallery Down South</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Good Times Café and Art Gallery (Zambo Norte)">Good Times Café and Art Gallery (Zambo Norte)</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Hini-GALAay">Hini-GALAay</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Irinugyun Artist">Irinugyun Artist Group</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Likha KARAGA">Likha-KARAGA</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Lumbayao Artist Collective">Lumbayao Artist Collective</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery={{ urlencode('Sining Mata Visual Art & Music School') }}">Sining Mata Visual Art & Music School</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Studio One Art Iligan">Studio One Art Iligan</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=Talaandig Soil Painters">Talaandig Soil Painters</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=TheBauHaus">TheBauHaus Gallery</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=The Gallery of the Peninsula and the Archipelago">The Gallery of the Peninsula and the Archipelago</a>
                                    <a class="dropdown-item" href="/gallerydetails?gallery=TINTA Artists Iligan">TINTA Artist Iligan</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Museum
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('bakaw.index') }}">Bakaw</a>
                                    <a class="dropdown-item" href="{{ route('balangay.index') }}">Balangay</a>
                                    <a class="dropdown-item" href="{{ route('dabakan.index') }}">Dabakan</a>
                                    <a class="dropdown-item" href="{{ route('heart.index') }}">Tapayan</a>
                                    <a class="dropdown-item" href="{{ route('kaban.index') }}">Kaban</a>
                                    <a class="dropdown-item" href="{{ route('kulintang.index') }}">Kulintang</a>
                                    <a class="dropdown-item" href="{{ route('lamin.index') }}">Lamin</a>
                                    <a class="dropdown-item" href="{{ route('tambol.index') }}">Tambol</a>
                                    <a class="dropdown-item" href="{{ route('lullaby.index') }}">Uyayi</a>
                                    <a class="dropdown-item" href="{{ route('vinta.index') }}">Vinta</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Download
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/files/Min-art Catalog.pdf" download>Davao Region Catalogue</a>
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

            <div class="title">BALANGAY MUSEUM</div>
            <p class="text-justify">While the small boat has a rich history and diverse significances in the cultures of these islands, the  “Balangay” is a poignant symbol of how Mindanao lost sight of its own histories because of contrived Filipino nationalism. Not content with robbing Butuan of its relic boats, the nation-state imagined from Manila even denied us the right to be who we are. In its eagerness to invent one civilization out of the archipelago, the Philippines imposed the boat as a metaphor for all pre-colonial settlements. In the process, it ignored the completely non-boat related genesis of many ancient settlements in Mindanao (in the case of terms like “ingod,” – both “village” and “world” – so much fruitful discourse needlessly silenced). Worse, the imposition threatened to erase the other beautiful metaphors which Mindanao’s cultures came to form around the boat: for the Obo Monuvu, the “ballangoy” is a gift, given by parents to their estranged children to encourage reconnection; while to the Ata it is the Skyboat of epics, descending from the heavens to take the hero and his chosen people to the realm of the gods. “Balangay” aims to reclaim all of that lost significance, and as it defies oppressive and deceptive Filipino homogenization, it celebrates the many beautiful ways of being Mindanawon.</p>
        </div>

        <div class="mt-5">
            <div class="text-center bg-minart-color-1 py-5 text-2xl font-bold">
                <div class="text-2xl leading-3 text-white">Come and visit the Virtual Museum!</div>
                <a href="https://balangay.min-art.org/" class="btn btn-outline-dark mt-4 px-10 text-white border-white" role="button" aria-disabled="true">Visit Museum</a>
            </div>
        </div>

        <div class="container">
            <div class="h-divider" id="featuredGalleries"></div>
            <div class="title">GALLERIES</div>
            
            <div class="row gallery-list-container">
                <a href="/gallerydetails?gallery=Agusan Artist Association (AAA)" class="galleries-btn hover:no-underline hover:text-white text-black sm:mx-5 mb-3 sm:mb-0 sm:w-auto w-full text-center p-3">
                    Agusan Artists Association AAA
                </a>
                <a href="/gallerydetails?gallery=Alampat Gallery" class="galleries-btn hover:no-underline hover:text-white text-black sm:mx-5 mb-3 sm:mb-0 sm:w-auto w-full text-center p-3">
                    Alampat Gallery
                </a>
                <a href="/gallerydetails?gallery=Lumbayao Artist Collective" class="galleries-btn hover:no-underline hover:text-white text-black sm:mx-5 mb-3 sm:mb-0 sm:w-auto w-full text-center p-3">
                    Lumbayan Artist Collective
                </a>
                <a href="/gallerydetails?gallery=The Gallery of the Peninsula and the Archipelago" class="galleries-btn hover:no-underline hover:text-white text-black sm:mx-5 mb-3 sm:mb-0 sm:w-auto w-full text-center p-3">
                    The Gallery of the Peninsula and the Archipelago
                </a>
                <a href="/gallerydetails?gallery=Good Times Café and Art Gallery (Zambo Norte)" class="galleries-btn hover:no-underline hover:text-white text-black sm:mx-5 mb-3 sm:mb-0 sm:w-auto w-full text-center p-3">
                    Good Times Cafe and Art Gallery
                </a>
            </div>
        </div>

        <footer class="footer-area footer--light mt-3">
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
                            <a class="link" href="{{ route('heart.index') }}">Tapayan</a>
                            <br>
                            <a class="link" href="{{ route('kaban.index') }}">Kaban</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="link" href="{{ route('kulintang.index') }}">Kulintang</a>
                            <br>
                            <a class="link" href="{{ route('lamin.index') }}">Lamin</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="link" href="{{ route('tambol.index') }}">Tambol</a>
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
