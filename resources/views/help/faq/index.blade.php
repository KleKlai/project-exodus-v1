@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">How can we help you?</h1>

        <div class="form-group ">
            <div class="input-group mt-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-search"></i>
                    </div>
                </div>

                <input type="text" class="form-control" placeholder="Describe your issue">
            </div>
        </div>

    </div>
</div>
<div class="container">

    <a href="{{ route('faqs.create') }}" class="btn btn-link">
        + FAQs
    </a>

    @forelse($data as $faqs)
        <a href="{{ route('faqs.show', $faqs) }}" class="text-undecorated">
            <div class="card mb-2">
                <div class="card-header">
                    {{ $faqs }}
                    <span class="float-right"><i class="fa fa-plus"></i></span>
                </div>
            </div>
        </a>
    @empty

    @endforelse

</div>
@endsection
