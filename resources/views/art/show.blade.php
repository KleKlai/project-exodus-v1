@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 mb-3">
            <img class="picture mb-1 mx-auto d-block artwork-picture" src="{{ url('storage/artwork/'.$art->attachment) }}" alt="art Picture" style="">
        </div>
        <div class="col">
            @canany(['update art', 'update art-status', 'delete art'])
                <div class="btn btn-primary btn-lg  btn-block mb-2">
                    {{ strtoupper($art->status) }}
                </div>
            @endcan


            <div class="row">
                <div class="col">
                    <h2 class="text-justify" style="padding-left: 10px; font-weight: bold;">{{ $art->title }}</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group mb-2">
                        <h3 class="text-justify">₱ {{ number_format($art->price, 2) }}</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="text-muted">Artist:</p>
                </div>
                <div class="col">
                    <a href="{{ route('landing.artist.profile', $art->user) }}">
                        <h5 class="text-justify" style="padding-left: 10px;">{{ $art->user->name }}</h5>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="text-muted">Gallery:</p>
                </div>
                <div class="col">
                    <a href="">
                        <h5 class="text-justify" style="padding-left: 10px;">{{ $art->user->gallery }}</h5>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="text-muted">Height:</p>
                </div>
                <div class="col">
                    <h5 class="text-justify" style="padding-left: 10px;">{{ $art->height .'cm' }}</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="text-muted">Width:</p>
                </div>
                <div class="col">
                    <h5 class="text-justify" style="padding-left: 10px;">{{ $art->width.'cm' }}</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="text-muted">Depth:</p>
                </div>
                <div class="col">
                    <h5 class="text-justify" style="padding-left: 10px;">{{ $art->depth .'cm' }}</h5>
                </div>
            </div>

            @auth
                @if(empty($art->reserve))
                    <a href="{{ route('art.reserve.set', $art) }}" class="btn btn-success btn-lg" style="float:right;">
                        Reserve
                    </a>
                @elseif($art->reserve->user_id == Auth::user()->id)
                    <a href="{{ route('art.reserve.cancel', $art->reserve) }}" class="btn btn-danger btn-lg float-right">
                        Cancel Reservation
                    </a>
                @elseif($art->reserve->user_id != Auth::user()->id && !empty($art->reserve))
                    <a href="javascript:void();" class="btn btn-warning float-right disabled">
                        Reserved
                    </a>
                @endif
            @endauth
            @guest
                <a href="{{ route('art.reserve.set', $art) }}" class="btn btn-success btn-lg" style="float:right;">
                    Reserve
                </a>
            @endguest

            <div class="container mt-5 mb-4 px-24" id="catalogs">
                <div class="border-b border-minart-color-1 h-1"></div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="text-muted">Tags:</p>
                </div>
                <div class="col">
                    <p class="badge badge-success">{{ $art->tag }}</p>
                </div>
            </div>
            <div class="card mt-2 {{ ($art->status == 'Pending') ? 'd-none' : '' }}" >
                <div class="card-header">Remark</div>
                <div class="card-body">
                    {{ $art->remark ?? 'No Remarks'}}
                </div>
            </div>

            @if (!empty($art->remarks))
                <div class="card mt-2">
                    <div class="card-header">
                        Remarks
                    </div>
                    <div class="card-body">
                        {{ $art->remarks }}
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>

<div class="container">
    <label class="text-muted" for="description">Description:</span></label>
    <p class="text-justify">{{ $art->description }}</p>
</div>

<div id="columns">
    @foreach($recommended_art as $artwork)
        <figure>
            <a href="{{ route('art.show', $artwork) }}"><img src="{{ url('storage/artwork/'.$artwork->attachment) }}"></a>
            <figcaption>
                <p>{{ $artwork->title }}</p>
                <div>₱{{ number_format($artwork->price, 2) }}</div>
            </figcaption>
        </figure>
    @endforeach
</div>

@include('services.art_management_modal')

@endsection
