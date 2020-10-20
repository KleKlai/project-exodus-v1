@extends('layouts.app')

@section('content')
<div class="container">

    <form method="POST" action="{{ route('FAQs.store') }}">
        @csrf

        <div class="form-group">
            <label for="title">Question</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="description">Answer</label>
            <textarea type="text" class="form-control" name="description" rows="10"></textarea>
        </div>

        <button class="btn btn-outline-success">Save</button>
    </form>
</div>
@endsection
