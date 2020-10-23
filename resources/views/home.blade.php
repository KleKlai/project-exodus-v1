@extends('layouts.app')

@section('content')
<div class="container">

    @can(['read site statistics'])
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
    @endcan

    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col">

            <div id="columns">


            </div>

        </div>
    </div>
</div>

@include('services.home_modal')

@endsection
