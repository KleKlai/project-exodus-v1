<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/images/nav.ico') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>
        {{-- Navigation --}}
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.25);">
            <a class="navbar-brand" href="{{ url('/home') }}">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            Sign Up
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            <!-- @yield('landing') -->
        </main>

        <div class="container-fluid mt-5">
            
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

            
            <footer class="footer-area footer--light">
                <div class="footer-big">

                    <div class="row">

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
                            </div>
                        </div>

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
                            </div>

                            <div class="col-md-3 col-sm-4">
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
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="footer-widget">
                                    <div class="footer-menu footer-menu--1">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        
                                        <a href="#">support@mindanaoart.com</a>
                                        <br>
                                        <h6><b>Copyright 2020. Mindanao Art</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </footer>
        </div>


    </body>
</html>
