@extends('layouts.app')

@section('content')

        <div class="container center-content">

            <h1>{{ $gallery_name }}</h1>
            <p></p>
            <div class="h-divider"></div>

            <div class="title">Artworks in this Gallery</div>
            <div class="row">
                @forelse($artist as $artist)
                    <div class="col-md">
                        <a href="">
                            <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');">
                                <p>{{ $artist->art->first()->title }}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    Insufficient Data
                @endforelse
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

            <div class="h-divider" id="featuredArtists"></div>

            <div class="title">Artist in this Gallery</div>
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');"></div>
                        <p class="picture-title">ARTIST NAME</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');"></div>
                        <p class="picture-title">ARTIST NAME</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-55.jpg');"></div>
                        <p class="picture-title">ARTIST NAME</p>
                    </a>
                </div>
            </div>

            <div class="h-divider"></div>

            <div class="title">Explore More Galleries</div>
            <div class="row">
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                        </div>
                        <p class="picture-title">GALLERY NAME</p>
                    </a>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');" >
                        </div>
                        <p class="picture-title">GALLERY NAME</p>
                    </a>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                        </div>
                        <p class="picture-title">GALLERY NAME</p>
                    </a>
                </div>
            </div>

        </div>
@endsection
