@extends('layouts.app')

@section('content')
@can('administrator')
<div class="container">

    <div class="row mt-2">
        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">{{ "User's" }}</h6>
                    <p class="card-text">{{ $user }}</p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">Artwork</h6>
                    <p class="card-text">{{ $artwork }}</p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">Reserve Art</h6>
                    <p class="card-text">{{ $reserve }}</p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">Sold Art</h6>
                    <p class="card-text">{{ $sold }}</p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">Gallery</h6>
                    <p class="card-text">{{ $gallery->count() }}</p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">Ticket</h6>
                    <p class="card-text">{{ $ticket }}</p>
                </div>
            </div>
        </div>

    </div>

</div>
@endcan

<div class="container">
    <div class="row">
        <div class="col">

            <div id="columns">

                @forelse($data as $data)
                    <a href="{{ route('artwork.show', $data) }}">
                        <figure>
                            <img src="{{ url('storage/artwork/'.$data->attachment) }}" alt="{{ $data->name }}">
                            <figcaption>{{ $data->name }}, {{ $data->category }}, ₱{{ $data->price }}</figcaption>
                        </figure>
                    </a>
                @empty
                    <div class="container text-center text-muted">
                        <h1>Whoops!</h1>

                        @if(Auth::user()->roles()->get()->pluck('name')->first() == 'Administrator' || Auth::user()->roles()->get()->pluck('name')->first() == 'Curator')
                            <h3>No artist submitted artwork yet!</h3>
                        @else
                            <h3>Looks like your gallery is empty?</h3>
                        @endif

                        @can('artist')
                        <a href="{{ route('artwork.create') }}"><p>Would you like to add one?</p></a>
                        @endcan
                        <img src="{{ asset('images/assets/Gallery_Empty.png') }}" alt="No Result Found" width="300" class="mx-auto d-block">
                    </div>
                @endforelse

            </div>

        </div>
    </div>
</div>

@include('services.home_modal')

@endsection

@section('script')

@endsection
