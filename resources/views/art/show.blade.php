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
                    Details

                    @canany(['update art', 'update art-status', 'delete art'])
                    <div class="dropdown float-right">
                        <a href="javascript:void();" class="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            @can('update art-status')
                                <a class="dropdown-item" href="javascript();" data-toggle="modal" data-target="#updateArtModal">Update</a>
                            @endcan
                            @can('update art')
                                <a class="dropdown-item" href="{{ route('art.edit', $art) }}">Edit</a>
                            @endcan
                            @can('delete art')
                                <a class="dropdown-item" href="javascript();" data-toggle="modal" data-target="#deleteArtModal">Delete</a>
                            @endcan
                        </div>
                    </div>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                             <label class="text-muted" for="name">Artwork Title:</label>
                             <h2 class="text-justify" style="padding-left: 10px; font-weight: bold;">{{ $art->title }}</h2>

                            <label class="text-muted"for="name">Artist:</label>
                            <a href="{{ route('user.show', $art->user->uuid) }}">
                                <h5 class="text-justify" style="padding-left: 10px;">{{ $art->user->name }}</h5>
                            </a>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                             <label class="text-muted" for="height">Dimension:</label>
                             <h5 class="text-justify" style="padding-left: 10px;">{{ $art->height .'cm x '.$art->width.'cm x '.$art->depth .'cm'}}</h5>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="description">Description:</span></label>
                        <p class="text-justify">{{ $art->description }}</p>
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="price">Price:</label>
                       <div class="input-group mb-2">
                           <h3 class="text-justify">₱{{ number_format($art->price, 2) }}</h3>
                          </div>
                   </div>

                    <div class="form-group">
                        <label class="text-muted" for="Tag">Tag:</label>
                        <p class="badge badge-success">{{ $art->tag }}</p>
                    </div>
                </div>
                <div class="card-footer">
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

        <div id="columns">
            @foreach($recommended_art as $artwork)
                <figure>
                    <a href="{{ route('art.show', $artwork) }}"><img src="{{ url('storage/artwork/'.$artwork->attachment) }}"></a>
                    <figcaption>
                        <p>{{ $artwork->name }}</p>
                        <div>₱{{ number_format($artwork->price, 2) }}</div>
                    </figcaption>
                </figure>
            @endforeach
        </div>

@include('services.art_management_modal')

@endsection
