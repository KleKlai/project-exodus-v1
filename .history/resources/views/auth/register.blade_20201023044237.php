@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

    <div class="col-2 d-none d-lg-block">
        <div class="col">
            <img src="/images/logo/logo.png" alt="Mindanao Art Logo">
        </div>
    </div>

    <div class="col-md-5">

        <h2>
            <a class="back" href="/">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
            </a>
            Register
        </h2>

        <div class="container">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <input id="name" type="text" class="mininput @error('name') is-invalid @enderror" name="name" placeholder="Fullname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                        <input id="email" type="email" class="mininput @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                        <input id="password" type="password" class="mininput @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <input id="password-confirm" type="password" class="mininput" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                </div>

                <button type="submit">{{ __('SUBMIT >>>') }}
                </button>
            </form>
        </div>
    </div>

    <div class="col-md-5 d-none d-lg-block">
        <img class="picture" src="/images/image2.png" alt="Image2" style="width: 100%">
    </div>

</div>

</div>
@endsection
