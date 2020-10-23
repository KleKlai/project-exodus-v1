@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('art.create') }}" class="btn btn-link">
        + Artworks
    </a>

    @can(['read reservation', 'cancel reservation', 'sold reservation'])
    <a href="{{ route('art.reserve.index') }}" class="btn btn-link">
        Reservation List
    </a>

    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#artImport">
        Import
    </button>

    @foreach($data as $data)
        <a href="{{ route('art.show', $data) }}" class="text-decoration-none" style="color: black">
            <div class="card card-body mb-2">
                <p class="lead">{{ $data->title }}</p>
                <small><b>Status:</b> {{ $data->status }} | <b>Category:</b> {{ $data->category }} | <b>Favorite:</b> {{ $data->favorite ?? 0 }}</small>
            </div>
        </a>
    @endforeach

</div>

@include('services.art_management_modal')

@endsection
