@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-7">

            <p class="lead">Message us and mindanao art representative will get back to you.</p>

            <form method="POST" action="{{ url('contact') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="name">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">{{ "We'll never share your email with anyone else." }}</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Message</label>
                  <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
