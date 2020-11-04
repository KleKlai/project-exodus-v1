@extends('layouts.app')

@section('content')

        <div class="container center-content">

            <h1>{{ $gallery_name }}</h1>
            <p></p>
            <div class="h-divider"></div>

            <div class="title">Artworks in this Gallery</div>
            <div class="row">
                @forelse($artist as $data)
                    <div class="col-md">
                        <a href="{{ route('art.show', $data->art->first()) }}">
                            <div class="picture-container background-image" style="background-image: url('{{ url('storage/artwork/'.$data->art->first()->attachment) }}');">
                                <p>{{ $data->art->first()->title }}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    Insufficient Data
                @endforelse
            </div>

            <div class="h-divider" id="featuredArtists"></div>

            <div class="title">Artist in this Gallery</div>
            <div class="row">
            @forelse($artist as $art)
                <div class="col-md-4">
                    <a href="{{ route('landing.artist.profile', $art) }}">
                        <div class="picture-container background-image" style="background-image: url('{{ url('storage/artwork/'.$art->art->first()->attachment) }}');"></div>
                        <p class="picture-title">{{ $art->name }}</p>
                    </a>
                </div>
                @empty
                    Insufficient Data
                @endforelse
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
