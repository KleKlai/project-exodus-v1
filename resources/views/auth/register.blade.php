@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-2"></div>


        <div class="col-lg-4">

            <h2 class="mb-5">
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

                    <button class="mt-3" type="submit">{{ __('SUBMIT') }}</button>
                    <div>Already have an account? <a href="/login" class="link">Login</a></div>
                </form>
            </div>
        </div>


        <div class="col-lg-4 d-none d-lg-block">
            <img class="picture" src="/images/image2.png" alt="Image2" style="width: 100%">
        </div>
        <div class="col-lg-2"></div>

    </div>

</div>
@endsection
