@extends('layouts.app')

@section('content')
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
                    <h6 class="font-weight-bold">Ticket</h6>
                    <p class="card-text">{{ $ticket }}</p>
                </div>
            </div>
        </div>

    </div>

    <div class="card mt-2">
        <div class="card-header">{{ __('User') }}</div>

        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="userData">User Data</label>
                    <select multiple class="form-control" name="userData">
                        @foreach($table as $column)
                            <option value="{{ $column }}">{{ $column }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Verified
                    </label>
                </div>
                <div class="form-group mt-2">
                    <button class="btn btn-outline-success">Export</button>
                    <button class="btn btn-outline-info">Export All</button>
                </div>
            </form>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeProfile">
        Launch demo modal
        </button>

        {{--  <a href="{{ url('contact') }}">Contact</a>  --}}

    </div>

</div>

@include('services.home_modal')

@endsection

@section('script')

@endsection
