@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row login">

        <div class="col-lg-2"></div>

        <div class="col-lg-4">
            <h2 class="mb-5">
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

                    @if (Route::has('password.request'))
                        <div>
                            <a href="{{ route('password.request') }}" class="link" style="font-size: 12px;">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif

                    <button class="mt-3" type="submit">{{ __('SUBMIT') }}</button>
                    <div>Do not have account yet? <a href="/register" class="link">Register</a></div>


                </form>
            </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
            <img class="picture" src="/images/image3.png" alt="Image3" style="width: 100%">
        </div>

        <div class="col-lg-2"></div>
    </div>
</div>
@endsection
