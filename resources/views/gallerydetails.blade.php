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

        <div class="container center-content">

            <h1>Gallery Name</h1>
            <p>Museum Assigned</p>
            <p>Gallery description will be put here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <div class="h-divider">
            
            <div class="title">Artworks in this Gallery</div>
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

            <div class="h-divider" id="featuredArtists">

            <div class="title">Artist in this Gallery</div>
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');"></div>
                        <p class="picture-title">ARTIST NAME</p>
                        <p>Gallery assigned, museum assigned.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');"></div>
                        <p class="picture-title">ARTIST NAME</p>
                        <p>Gallery assigned, museum assigned.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-55.jpg');"></div>
                        <p class="picture-title">ARTIST NAME</p>
                        <p>Gallery assigned, museum assigned.</p>
                    </a>
                </div>
            </div>


            <div class="h-divider">

            <div class="title">Events</div>
            <div class="row">
                <div class="col-md-6">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');"></div>
                        <p class="picture-title">EVENT NAME</p>
                        <p>Gallery assigned, museum assigned. Gallery description will be put here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');"></div>
                        <p class="picture-title">EVENT NAME</p>
                        <p>Gallery assigned, museum assigned. Gallery description will be put here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </a>
                </div>
            </div>

            <div class="h-divider">

            <div class="title">Explore More Galleries</div>
            <div class="row">
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                        </div>
                        <p class="picture-title">GALLERY NAME</p>
                        <p>Gallery description will be put here.</p>
                    </a>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');" >
                        </div>
                        <p class="picture-title">GALLERY NAME</p>
                        <p>Gallery description will be put here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </a>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                        </div>
                        <p class="picture-title">GALLERY NAME</p>
                        <p>Gallery description will be put here.</p>
                    </a>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <a href="/galleries" type="button" class="btn-link">View All</a>
            </div>

        </div>

    </body>
</html>