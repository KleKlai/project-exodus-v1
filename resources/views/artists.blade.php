@extends('layouts.landing')

@section('landing')
<div class="container mt-5">
    <div class="row">

        @foreach($user as $artist)
        <div class="col-md-4">
            <a href="{{ route('landing.artist.profile', $artist) }}">
                <div class="picture-container background-image" style="background-image: url('{{ url('storage/artwork/'.$artist->art->first()->attachment) }}');"></div>
                <p class="picture-title link">{{ $artist->name }}</p>
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection
