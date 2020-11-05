@extends('layouts.app')

@section('content')

        <div class="container center-content">

            <h1>Gallery Name</h1>
            <p>Museum Assigned</p>
            <div class="h-divider"></div>

            <div class="title">Artworks in this Gallery</div>
            

            <div class="h-divider"></div>

            <div class="title">Explore More Galleries</div>
                <div class="row gallery-list-container">
                @foreach($galleryList as $gallery)
                        <a href="/gallerydetails" class="galleries-btn hover:no-underline hover:text-white text-black sm:mx-5 mb-3 sm:mb-0 sm:w-auto w-full text-center p-3">
                            {{ $gallery }}
                        </a>
                @endforeach
                </div>

        </div>
@endsection
