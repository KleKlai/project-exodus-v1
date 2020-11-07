@extends('layouts.app')

@section('content')

    <div class="container center-content">

        <div class="title">{{ $chosenGallery }}</div>
        <p class="text-justify">{{ $chosenGallery }}</p>

        <div class="h-divider"></div>
        <div class="title">Artworks on Sale in this Gallery</div>

        <div id="columns">
            @foreach ($art as $artwork)
                <figure>
                    <a href="{{ route('art.show', $artwork) }}">
                        @if ($artwork->attachment)
                            <img src="{{ url('storage/artwork/'.$artwork->attachment) }}">
                            <figcaption>
                                {{ $artwork->title }}
                            </figcaption>
                        @else
                            <img src="https://via.placeholder.com/300x300?text={{ $artwork->title }}">
                            <figcaption>
                                {{ $artwork->title }}
                            </figcaption>
                        @endif
                    </a>
                </figure>
            @endforeach
        </div>

    </div>
@endsection
