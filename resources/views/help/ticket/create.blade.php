@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Submit a ticket</h3>

    <form action="{{ route('ticket.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <p class="font-weight-bold">Please complete the form and we will be in touch shortly.</p>

        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required>

            @error('subject')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" placeholder="How can we help you?" required>{{ old('description') }}</textarea>

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="attachment">Attachment</label>
            <input type="file" class="form-control-file @error('attachment') is-invalid @enderror" name="attachment" value="{{ old('attachment') }}">

            @error('attachment')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <a href="{{ url()->previous() }}" class="btn border-none">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
