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

            <div class="card">
                <div class="card-header">
                    @can(['update art-status', 'delete art'])
                    <div class="dropdown float-right">
                        <a href="javascript:void();" class="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            @can('update art-status')
                                <a class="dropdown-item" href="javascript();" data-toggle="modal" data-target="#updateArtModal">Update</a>
                            @endcan
                            @if($art->status != 'Approve')
                                @can('update art')
                                    <a class="dropdown-item" href="{{ route('art.edit', $art) }}">Edit</a>
                                @endcan
                                @can('delete art')
                                    <a class="dropdown-item" href="javascript();" data-toggle="modal" data-target="#deleteArtModal">Delete</a>
                                @endcan
                            @endif
                        </div>
                    </div>
                    @endcan

                    <h2 class="card-title">{{ $art->title }}</h2>
                    <h3 class="card-subtitle mb-2 text-muted">₱ {{ number_format($art->price, 2) }}</h3>

                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-3">
                            <p class="text-muted">Artist:</p>
                        </div>
                        <div class="col">
                            <a href="{{ route('landing.artist.profile', $art->user) }}" class="link">
                                <h5 class="text-justify" style="padding-left: 10px;">{{ $art->user->name }}</h5>
                            </a>
                        </div>
                    </div>
                    @if (!empty($art->user->gallery))
                    <div class="row">
                        <div class="col-3">
                            <p class="text-muted">Gallery:</p>
                        </div>
                        <div class="col">
                            <h5 class="text-justify" style="padding-left: 10px;">{{ $art->user->gallery }}</h5>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-3">
                            <p class="text-muted">Dimension:</p>
                        </div>
                        <div class="col">
                            <h5 class="text-justify" style="padding-left: 10px;">
                                {{ $art->height .'cm' }} x
                                {{ $art->width.'cm' }}
                                @if (!empty($art->depth))
                                    x {{ $art->depth .'cm' }}
                                @endif
                            </h5>
                        </div>
                    </div>

                    @auth
                        @if(empty($art->reserve))
                            <a href="{{ route('art.reserve.set', $art) }}" class="btn btn-success btn" style="float:right;">
                                Reserve
                            </a>
                        @elseif($art->reserve->user_id == Auth::user()->id)
                            <a href="{{ route('art.reserve.cancel', $art->reserve) }}" class="btn btn-danger btn float-right">
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


                </div>
                <div class="card-footer">
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
    </div>
</div>

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            Description:
        </div>
        <div class="card-body">
            <p class="text-justify">{{ $art->description }}</p>
        </div>
    </div>
</div>


    @if(empty($recommended_art))
    <div class="container">
        <div class="h-divider"></div>
        <div class="title">View Other Artworks</div>
    </div>
    @endif

<div id="columns">

    @forelse($recommended_art as $artwork)
        <figure>
            <a href="{{ route('art.show', $artwork) }}"><img src="{{ url('storage/artwork/'.$artwork->attachment) }}"></a>
            <figcaption>
                {{ $artwork->title }}
                <div>₱{{ number_format($artwork->price, 2) }}</div>
            </figcaption>
        </figure>
    @empty

    @endforelse
</div>

@include('services.art_management_modal')

@endsection
