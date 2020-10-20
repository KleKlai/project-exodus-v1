@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('art.create') }}" class="btn btn-link">
        + Artworks
    </a>

    @foreach($data as $data)
        <a href="{{ route('art.show', $data) }}" class="text-decoration-none" style="color: black">
            <div class="card card-body mb-2">
                <p class="lead">{{ $data->name }}</p>
                <small><b>Status:</b> {{ $data->status }} | <b>Category:</b> {{ $data->category }} | <b>Favorite:</b> {{ $data->favorite ?? 0 }}</small>
            </div>
        </a>
    @endforeach

</div>

@endsection
