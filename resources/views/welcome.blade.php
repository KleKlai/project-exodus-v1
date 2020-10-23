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
                            <a href="#featuredArtworks" class="btn btn-link" style="width: 100%;">
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
                @foreach($arts as $art)
                    <div class="col-md-4">
                        <a href="{{ route('art.show', $art) }}">
                            <div class="picture-container background-image" style="background-image: url('{{ url('storage/artwork/'.$art->attachment) }}');">
                                <p>{{ $art->title }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="container" style="text-align: center;">
                <a href="/artworks" type="button" class="btn-link">View All</a>
            </div>

            {{--  Featured Artist  --}}
            <div class="h-divider" id="featuredArtists"></div>
            <div class="title">ARTISTS</div>
            <div class="row">
                @forelse($user as $artist)
                <div class="col-md-4">
                    <a href="{{ route('landing.artist.profile', $artist) }}">
                        <div class="picture-container background-image" style="background-image: url('{{ url('storage/artwork/'.$artist->art->first()->attachment) }}');">
                        <p>{{ $artist->name }}</p>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-md4">
                    <h3>Insufficient Data</h3>
                </div>
                @endforelse
            </div>
            <div class="container mb-5" style="text-align: center;">
            <a href="/artists" type="button" class="btn-link">View All</a>
            </div>
        </div>
@endsection
