@extends('layouts.app')

@section('content')
<div class="container">

    @if(auth()->user()->unreadNotifications->count())
        <a class="ml-1" href="{{ route('notification.clear') }}">
            Mark all as read
        </a>
    @endif

    @forelse($data as $data)
        <div class="card card-body mb-1">
            <b>{{ $data->data['subject'] }} </b> {{ $data->data['body'] }}
        </div>
    @empty
        <h4>We'll let you know when we've got something new for you.</h4>
    @endforelse
</div>
@endsection
