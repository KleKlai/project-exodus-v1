@extends('layouts.landing')

@section('landing')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <a href="/artistprofile">
                <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');"></div>
                <p class="picture-title link">ARTIST NAME</p>
            </a>
        </div>
        <div class="col-md-4">
            <a href="/artistprofile">
                <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');"></div>
                <p class="picture-title link">ARTIST NAME</p>
            </a>
        </div>
        <div class="col-md-4">
            <a href="/artistprofile">
                <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-55.jpg');"></div>
                <p class="picture-title link">ARTIST NAME</p>
            </a>
        </div>
    </div>
</div>
@endsection