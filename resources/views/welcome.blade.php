@extends('layouts.landing')


@section('landing')
    {{-- Cover --}}
    {{-- <div id="captioned-gallery">
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
    </div> --}}
    <img src="/images/covers/cover6.png" alt="cover" class="w-screen">

    <div class="container mt-5 mb-4 px-24" id="catalogs">
        <div class="border-b border-minart-color-1 h-1"></div>
    </div>

    <div class="text-center font-bold text-2xl">
        <h1 class="uppercase text-4xl">Catalogue</h1>
        <div class="leading-7">
            <div>Download artwork catalogs to view artwork listings</div>
            <div>and details of six different galleries in the Davao Region.</div>
        </div>
        <a href="#" class="btn btn-outline-dark mt-4 px-10" role="button" aria-disabled="true">Download Catalog</a>
    </div>

    <div class="mt-5">
        <div class="text-center bg-minart-color-1 py-5 text-2xl font-bold">
            <div class="text-4xl text-white">Visit Mindanao Art 2020 Exhibit via Appointment.</div>
            <a href="#" class="btn btn-outline-dark text-white border-white mt-4 px-10" role="button" aria-disabled="true">Schedule Appointment</a>
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

    <div class="container newsletter">
        <div class="row text-center">
            <div class="col-md-10">
                <span class="text">Get the latest art stories and collections by simply 'Subscribe'</span>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-outline-dark text-white border-white">Subcribe</button>
            </div>
        </div>
    </div>

@endsection
