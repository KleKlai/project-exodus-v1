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
    </head>
    <body>
        {{-- Navigation --}}
        <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>

        <nav class="navbar navbar-expand-lg navbar-light mt-4 mb-5">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/artworks">Artworks <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/artists">Artists</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/home">
                            Home
                        </a>
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

        @yield('landing')

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
         <!-- FOOTER -->
         <footer class="footer-area footer--light">
                <div class="footer-big">
                    <!-- start .container -->
                    <div class="row" style="margin-left: 0 !important; margin-right: 0 !important;">
                        <div class="col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <div class="footer-menu footer-menu--1">
                            <h4 class="footer-widget-title"><b>Mindanao Art</b></h4>
                                <a href="#">Artworks</a>
                                <br>
                                <a href="#">Artists</a>
                                <br>
                                <a href="#">Museums</a>
                                <br>
                                <a href="#">Galleries</a>
                                <br>
                                <a href="#">Regional Groups</a>
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
                                <a href="#">Dabakan</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#">Lamin</a>
                                <br>
                                <a href="#">Kaban</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#">Balangay</a>
                                <br>
                                <a href="#">Kulintang</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#">Vinta</a>
                                <br>
                                <a href="#">Heart</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#">Bakaw</a>
                                <br>
                                <a href="#">Lullaby</a>
                                <br>
                                <a href="#">Tambol</a>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                        </div>

                        <div class="col-md-2 col-sm-3">
                        <div class="footer-widget">
                            <div class="footer-menu footer-menu--1">
                                <br>
                                <a href="#">Artist Handbook</a>
                                <br>
                                <a href="#">User Guides</a>
                                <br>
                                <a href="#">About us</a>
                                <br>
                                <a href="#">FAQs</a>
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
                                    <a href="#">support@mindanaoart.com</a>
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
            <!-- end /.FOOTER -->




    </body>
</html>
