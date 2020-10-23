@extends('layouts.landing')


@section('landing')

        <div class="container center-content">

            <h1>{{ $user->name }}</h1>
            <p>{{ $user->gallery }}</p>
            @foreach($user->tagArray as $museum)
                <p>{{ $museum }}</p>
            @endforeach
            <p>{{ $user->bio ?? ''}}</p>

            <div class="h-divider"><div>

            <div class="title">ARTWORKS</div>
            <div id="columns">

                @foreach($art as $artwork)
                    <figure>
                        <a href="{{ route('art.show', $artwork) }}"><img src="{{ url('storage/artwork/'.$artwork->attachment) }}"></a>
                        <figcaption>
                            <p>{{ $artwork->title }}</p>
                            <div>₱{{ number_format($artwork->price, 2) }}</div>
                        </figcaption>
                    </figure>
                @endforeach
            </div>

        </div>
@endsection
