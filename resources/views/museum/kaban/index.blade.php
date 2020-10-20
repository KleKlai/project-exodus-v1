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
        <div class="container-fluid cover-picture background-image" style="background-image: url('/images/galleries/thebauhaus.png')">
            
            <div class="nav-container">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.25);">
                    <a class="navbar-brand" href="#">
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
                            <li class="nav-item">
                                <a class="nav-link" href="/galleries">Galleries</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/login">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">
                                    Sign Up
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>


        {{-- Content --}}
        <div class="container">

            {{--  Internal Links  --}}
            <div>
                <div class="row">
                    <a href="#featuredArtworks" class="col-md mt-3">
                        <div class="header-link">
                            <p>ARTWORKS</p>
                        </div>
                    </a>
                    <a href="#featuredArtists" class="col-md mt-3">
                        <div class="header-link">
                            <p>ARTISTS</p>
                        </div>
                    </a>
                    <a href="#featuredGalleries" class="col-md mt-3">
                        <div class="header-link">
                            <p>GALLERIES</p>
                        </div>
                    </a>
                </div>
            </div>

            {{--  Featured Artworks  --}}
            <div class="h-divider" id="featuredArtworks">

            <div class="title">FEATURED ARTWORKS</div>
            <div class="row">
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');">
                            <p>ARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');">
                            <p>THIS IS A VERY LONG VERY LOOONGARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-55.jpg');">
                            <p>ARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <a href="/artworks" type="button" class="btn-link">View All</a>
            </div>

            {{--  Featured Artist  --}}
            <div class="h-divider" id="featuredArtists">

            <div class="title">FEATURED ARTISTS</div>
            <div class="row">
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');"></div>
                        <div class="picture-title link">ARTIST NAME</div>
                    </a>
                        <p>Gallery assigned, museum assigned.</p>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');"></div>
                        <div class="picture-title link">ARTIST NAME</div>
                    </a>
                        <p>Gallery assigned, museum assigned.</p>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-55.jpg');"></div>
                        <div class="picture-title link">ARTIST NAME</div>
                    </a>
                        <p>Gallery assigned, museum assigned.</p>
                </div>
            </div>
            <div class="container" style="text-align: center;">
            <a href="/artists" type="button" class="btn-link">View All</a>
            </div>

            <div class="h-divider" id="featuredGalleries">

            <div class="title">FEATURED GALLERIES</div>
            <div class="row">
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                        </div>
                        <div class="picture-title link">GALLERY NAME</div>
                    </a>
                        <p>Gallery description will be put here.</p>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');" >
                        </div>
                        <div class="picture-title link">GALLERY NAME</div>
                    </a>
                        <p>Gallery description will be put here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                        </div>
                        <div class="picture-title link">GALLERY NAME</div>
                    </a>
                        <p>Gallery description will be put here.</p>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <a href="/galleries" type="button" class="btn-link">View All</a>
            </div>

            <div class="h-divider">

            <div class="title">VISIT MINDANAO MUSEUMS</div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
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


    </body>
</html>