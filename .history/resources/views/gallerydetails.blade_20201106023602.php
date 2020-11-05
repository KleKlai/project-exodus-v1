@extends('layouts.app')

@section('content')

    <div class="container center-content">

        <div class="title">GALLERY NAME</div>
        <p class="text-justify">Gallery Narative. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="h-divider"></div>
        <div class="title">Artworks in this Gallery</div>

        <p class="font-italic">NOTE: Displays all the artworks in this gallery only pinterest style like. You can copy the style in artworks page.</p>

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
