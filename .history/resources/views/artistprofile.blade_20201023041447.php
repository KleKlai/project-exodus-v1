@extends('layouts.landing')


@section('landing')

        <div class="container center-content">

            <h1>Artist Name</h1>
            <p>Gallery Assigned, Museum Assigned</p>
            <p>Artisti Biography in here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <div class="h-divider">
            
            <div class="title">ARTWORKS</div>
            <div id="columns">
                <figure>
                    <a href="">
                        <img src="{{ asset('/images/image1.png') }}">
                    </a>
                    <figcaption>
                        <a href="/artistprofile" class="link">Artist Name</a>
                        <p>Artwork Title, Year</p>
                        <a href="/gallerydetails" class="link">Gallery Name Located</a>
                        <div>price</div>
                    </figcaption>
                </figure>

                <figure>
                    <img src="{{ asset('/images/TBH_RWSX-55.jpg') }}">
                    <figcaption>Pocahontas based on 17th century Powhatan costume</figcaption>
                </figure>
                
                <figure>
                    <img src="{{ asset('/images/TBH_RWSX-56.jpg') }}">
                    <figcaption>Snow White, based on 16th century German fashion</figcaption>
                </figure>	
                
                <figure>
                    <img src="{{ asset('/images/TBH_RWSX-57.jpg') }}">
                    <figcaption>Ariel wearing an evening gown of the 1890’s</figcaption>
                </figure>
                
                <figure>
                    <img src="{{ asset('/images/TBH_RWSX-58.jpg') }}">
                    <figcaption>Tiana wearing the <i>robe de style</i> of the 1920’s</figcaption>
                </figure>
            </div>

        </div>
@endsection