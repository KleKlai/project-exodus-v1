@extends('layouts.app')

@section('content')
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

    <div class="container flex flex-row items-center justify-center">
        <a href="{{ $art->previousPageUrl() }}">
            <i class="fas fa-chevron-left text-xl flex items-center pt-1"></i>
        </a>

        <div class="mx-2 px-3 pt-1 flex items-center bg-gray-200 rounded-full pb-1">
            {{ $art->firstItem() }} to {{ $art->lastItem() }} of {{ $art->total() }}
        </div>

        <a href="{{ $art->nextPageUrl() }}">
            <i class="fas fa-chevron-right text-xl pt-1"></i>
        </a>
    </div>
@endsection
