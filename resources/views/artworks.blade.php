@extends('layouts.app')

@section('content')
    <div class="container flex flex-row">
        <form action="/artworks" method="get" class="flex flex-row w-full">
            <select name="museum" onchange="this.form.submit()" class="mr-3 w-1/4">
                <option value="0" {{ ($museum == 0) ? 'selected' : '' }}>Bakaw</option>
                <option value="1" {{ ($museum == 1) ? 'selected' : '' }}>Kulintang</option>
                <option value="2" {{ ($museum == 2) ? 'selected' : '' }}>Balangay</option>
            </select>

            <select name="gallery" onchange="this.form.submit()" class="w-1/4">
                @foreach ($galleries as $item)
                    <option value="{{ $item }}" {{ ($item == $gallery) ? 'selected' : '' }}>{{ $item }}</option>
                @endforeach
            </select>
        </form>
    </div>

    <div id="columns">
        @foreach ($art as $artwork)
            <figure>
                <a href="{{ route('art.show', $artwork) }}">
                    @if ($artwork->attachment)
                        <img src="{{ url('storage/artwork/'.$artwork->attachment) }}">
                    @else
                        <img src="https://via.placeholder.com/300x300?text={{ $artwork->title }}">
                    @endif
                </a>
            </figure>
        @endforeach
    </div>

    <div class="container flex flex-row items-center justify-center">
        @if ($art->previousPageUrl())
            <a href="{{ $art->previousPageUrl() }}&museum={{ $museum }}&gallery={{ urlencode($gallery) }}">
                <i class="fas fa-chevron-left text-xl flex items-center pt-1"></i>
            </a>
        @else
            <i class="fas fa-chevron-left text-xl flex items-center text-gray-400"></i>
        @endif

        <div class="mx-2 px-3 pt-1 flex items-center bg-gray-200 rounded-full pb-1">
            {{ $art->firstItem() }} to {{ $art->lastItem() }} of {{ $art->total() }}
        </div>

        @if ($art->nextPageUrl())
            <a href="{{ $art->nextPageUrl() }}&museum={{ $museum }}&gallery={{ urlencode($gallery) }}">
                <i class="fas fa-chevron-right text-xl pt-1"></i>
            </a>
        @else
            <i class="fas fa-chevron-right text-xl text-gray-400"></i>
        @endif
    </div>
@endsection
