@extends('layouts.landing')

@section('landing')

        <div id="columns">

            @foreach($art as $artwork)
            <figure>
                <a href="{{ route('art.show', $artwork) }}"><img src="{{ url('storage/artwork/'.$artwork->attachment) }}"></a>
            </figure>
            @endforeach

        </div>
@endsection
