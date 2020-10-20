@extends('layouts.app')

@section('content')

<div class="container">

    @canany('read ticket statistic')
    <div class="row mt-2">
        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">Resolve</h6>
                    <p class="card-text">{{ $resolve }}</p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">Unresolve</h6>
                    <p class="card-text">{{ $unresolve }}</p>
                </div>
            </div>
        </div>
    </div>
    @endcan

    <a href="{{ route('ticket.create') }}" class="btn btn-link">
        + Support Ticket
    </a>

    @foreach($data as $data)
        <a href="{{ route('ticket.show', $data) }}" class="text-decoration-none">
            <div class="card card-body mb-2">
                <p class="lead">Ticket Ref: {{ $data->id }}</p>
                <small><b>Status:</b> {{ $data->status }} | <b>Created:</b> {{ $data->created_at->diffForHumans() }}</small>
            </div>
        </a>
    @endforeach
</div>
@endsection
