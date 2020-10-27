@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row  login">
        <div class="col-md-2">
            <div class="col mb-5">
                <img src="{{ asset('/images/logo/logo.png')}}" alt="Mindanao Art Logo">
            </div>
        </div>
        <div class="col-md-5">

            <h2 class="mb-5">
                <a class="back" href="/">
                    <i class="back"><svgwidth="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg></i>
                </a>
                Login
            </h2>

            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                            <input id="email" type="email" class="mininput @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="row">
                            <input id="password" type="password" class="mininput @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>


                    <div class="form-check">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>

                    @if (Route::has('password.request'))
                        <div>
                            <a href="{{ route('password.request') }}" style="font-size: 12px;">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif

                    <button class="mt-4" type="submit">{{ __('SUBMIT >>>') }}</button>


                </form>
            </div>
        </div>

        <div class="col-md-5">
            <img class="picture" src="/images/image3.png" alt="Image3" style="width: 100%">
        </div>
    </div>
</div>
@endsection
