@extends('layouts.landing')

@section('landing')

        <div id="columns">
            <figure>
                <a href="/"><img src="{{ asset('/images/image1.png') }}"></a>
                <figcaption>
                    <a href="/artistprofile" class="link">Artist Name</a>
                    <p>Artwork Title</p>
                    <a href="/gallerydetails" class="link">Gallery Name Located</a>
                    <div>Price</div>
                </figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/image2.png') }}">
                <figcaption>Rapunzel, clothed in 1820’s period fashion</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/image3.png') }}">
                <figcaption>Belle, based on 1770’s French court fashion</figcaption>
            </figure>
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-53.jpg') }}">
                <figcaption>Mulan, based on the Ming Dynasty period</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-54.jpg') }}">
                <figcaption>Sleeping Beauty, based on European fashions in 1485</figcaption>
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
                
            <figure>
                <img src="{{ asset('/images/image1.png') }}">
                <figcaption>Cinderella wearing European fashion of the mid-1860’s</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/image2.png') }}">
                <figcaption>Rapunzel, clothed in 1820’s period fashion</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/image3.png') }}">
                <figcaption>Belle, based on 1770’s French court fashion</figcaption>
            </figure>
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-53.jpg') }}">
                <figcaption>Mulan, based on the Ming Dynasty period</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-54.jpg') }}">
                <figcaption>Sleeping Beauty, based on European fashions in 1485</figcaption>
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
@endsection