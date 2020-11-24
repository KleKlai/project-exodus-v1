@extends('layouts.app')

@section('content')
<!-- Cover -->
    <div id="captioned-gallery">
        <figure class="slider row">
            <figure class="col-md">
                <img src="{{ asset('/images/covers/cover1.jpg') }}" class="img-fluid" alt>
            </figure>
            <figure class="col-md">
                <img src="{{ asset('/images/covers/cover2.jpg') }}" class="img-fluid" alt>
            </figure>
            <figure class="col-md">
                <img src="{{ asset('/images/covers/cover3.jpg') }}" class="img-fluid" alt>
            </figure>
            <figure class="col-md">
                <img src="{{ asset('/images/covers/cover4.jpg') }}" class="img-fluid" alt>
            </figure>
            <figure class="col-md">
                <img src="{{ asset('/images/covers/cover5.jpg') }}" class="img-fluid" alt>
            </figure>
        </figure>
    </div>
    <!-- <img src="/images/covers/cover6.png" alt="cover" class="w-screen"> -->
    <div class="container">

        <div class="h-divider" id="featuredGalleries"></div>
        <div class="title">VIRTUAL MUSEUMS</div>

        <div class="col-md-4 mb-4">
            <a href="https://kulintang.min-art.org/">
                <div class="picture-container background-image" style="background-image: url('/images/covers/KulintangCover.png');">
                    <p class="picture-inner-title">KULINTANG</p>
                </div>
            </a>
        </div>
        
        <div class="col-md-4 mb-4">
            <a href="https://balangay.min-art.org/">
                <div class="picture-container background-image" style="background-image: url('/images/covers/BalangayCover.png');">
                    <p class="picture-inner-title">BALANGAY</p>
                </div>
            </a>
        </div>

    </div>

    <div class="container">

        <div class="container">
            <div class="h-divider" id="featuredGalleries"></div>
            <div class="title">CURRENT ONLINE EXHIBITIONS</div>
        </div>

        <div class="row gallery-list-container">
        @foreach($galleryList as $gallery)
                <a href="{{ $gallery['link'] }}" class="galleries-btn hover:no-underline hover:text-white text-black sm:mx-5 mb-3 sm:mb-0 sm:w-auto w-full text-center p-3">
                    {{ $gallery['name'] }}
                </a>
        @endforeach
        </div>


        <div class="h-divider"></div>

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
                        <p class="picture-inner-title">TAPAYAN</p>
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
                        <p class="picture-inner-title">TAMBOL</p>
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

    </div>

    <div class="newsletter">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-10">
                    <span class="text">Get the latest art stories and collections by simply 'Subscribe'</span>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-outline-dark text-white border-white">Subcribe</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5" id="speakers">
        <div class="text-4xl text-center font-bold leading-9 mb-4">
            Mindanao Art 2020 speakers
        </div>
        <div class="container mt-3 md:grid md:grid-cols-2 md:grid-rows-2">
            <div class="video-container mb-4 md:mr-4">
                <iframe width="535" height="307" src="https://www.youtube.com/embed/r3TZxgBmEZw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="mb-2" style="height: 307px;">
                <div class="video-container mb-4">
                    <iframe width="535" height="307" src="https://www.youtube.com/embed/m47vH3bhCsI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="video-container mb-4 md:mr-4">
                <iframe width="535" height="307" src="https://www.youtube.com/embed/WyraGm8_5js" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div style="height: 307px;">
                <div class="video-container mb-4">
                    <iframe width="535" height="307" src="https://www.youtube.com/embed/rV6Wz_6osTg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
