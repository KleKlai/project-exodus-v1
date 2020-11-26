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
        <div class="title">VISIT VIRTUAL MUSEUMS</div>
        
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
                <a href="{{ route('kulintang.index') }}">
                    <div class="picture-container background-image" style="background-image: url('/images/covers/KulintangCover.png');">
                        <p class="picture-inner-title">KULINTANG</p>
                    </div>
                </a>
            </div>
            
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

@endsection
