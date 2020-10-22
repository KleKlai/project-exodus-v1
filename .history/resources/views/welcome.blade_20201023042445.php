@extends('layouts.landing')


@section('landing')
            {{-- Cover --}}
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
                            
            {{-- Content --}}    
            <div class="container">
                <div class="row featured">

                    <div class="col-md-6">
                        <div class="module mid">
                            <a href="#featuredArtworks" class="btn btn-link">
                                <img src="{{ asset('/images/insidelinkimage.png') }}" class="img-circle img-thumbnail">
                                <h2>Artworks</h2>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="module mid">
                            <a href="#featuredArtists" class="btn btn-link">
                                <img src="{{ asset('/images/insidelinkimage.png') }}" class="img-circle img-thumbnail">
                                <h2>Artists</h2>
                            </a>
                        </div>
                    </div>

            </div>

        </div>



        <div class="container">

            {{--  Featured Artworks  --}}
            <div class="h-divider" id="featuredArtworks"></div>

            <div class="title">ARTWORKS</div>
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/slide1.png');">
                            <p>ARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/slide2.png');">
                            <p>THIS IS A VERY LONG VERY LOOONGARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/slide3.png');">
                            <p>ARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/slide4.png');">
                            <p>ARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/slide5.png');">
                            <p>THIS IS A VERY LONG VERY LOOONGARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/covers/slide1.png');">
                            <p>ARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <a href="/artworks" type="button" class="btn-link">View All</a>
            </div>

            {{--  Featured Artist  --}}
            <div class="h-divider" id="featuredArtists"></div>
            <div class="title">ARTISTS</div>
            <div class="row">
            <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');">
                        <p>Artist name</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');">
                        <p>Artist name</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-55.jpg');">
                        <p>Artist name</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');">
                        <p>Artist name</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');">
                        <p>Artist name</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-55.jpg');">
                            <p>Artist name</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container mb-5" style="text-align: center;">
            <a href="/artists" type="button" class="btn-link">View All</a>
            </div>
        </div>
@endsection
