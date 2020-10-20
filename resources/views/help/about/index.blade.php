@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            About
            <a href="{{ url('about/edit', $about ?? '') }}" class="float-right">Modify</a>
        </div>
        <div class="card-body" style="white-space: pre-wrap;">
            {{ $about->about }}
        </div>
        <div class="card-footer">
            Updated {{ $about->updated_at->diffForHumans() }}
        </div>
    </div>
</div>

@endsection
