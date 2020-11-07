@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{ route('artist.category.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="10"></textarea>

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
    </form>

</div>
@endsection
