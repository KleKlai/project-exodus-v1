@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/about" method="POST">

        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">About</label>
            <textarea name="about" rows="25" class="form-control" required>
                {{ $about->about }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

@endsection
