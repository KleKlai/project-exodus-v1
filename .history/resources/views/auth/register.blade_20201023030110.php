@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

    <div class="col-2 d-none d-lg-block">
        <div class="col">
            <img src="/images/logo.png" alt="Mindanao Art Logo">
        </div>
    </div>

    <div class="col-md">

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
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+63</div>
                            </div>

                            <input id="mobile" type="number" class="mininput form-control @error('mobile') is-invalid @enderror"
                                name="mobile"
                                value="{{ old('mobile') }}"
                                required
                                autofocus
                                maxlength="10"
                                minlength="10"
                            >

                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                </div>

                <div class="form-group row">
                        <select name="category" id="category" onchange="showOtherDropDown()" class="mininput @error('category') is-invalid @enderror" required>
                            <option value="" selected>Categories</option>
                            <option value="Gallery">Gallery</option>
                            <option value="Regional Group">Regional Group</option>
                            <option value="Special Projects">Special Projects</option>
                            <option value="Featured Artist">Featured Artist</option>
                        </select>

                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row d-none" id="gallery">
                        <select name="gallery" class="mininput @error('gallery') is-invalid @enderror" id="galleryInput">
                            <option value="" selected>-</option>
                            @foreach($gallery as $data)
                                <option value="{{ $data->name }}" {{ old('gallery') == $data->name ? "selected" :""}}>
                                    {{ $data->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('gallery')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row d-none" id="regional">
                        <select name="regional" class="@error('regional') is-invalid @enderror" id="regionalInput">
                            <option value="" selected>-</option>
                            @foreach($regional as $data)
                                <option value="{{ $data->name }}" {{ old('regional') == $data->name ? "selected" :""}}>
                                    {{ $data->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('regional')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row d-none" id="special">
                        <select name="special" class="mininput @error('special') is-invalid @enderror" id="specialInput">
                            <option value="" selected>-</option>
                            @foreach($special as $data)
                                <option value="{{ $data->name }}" {{ old('special') == $data->name ? "selected" :""}}>
                                    {{ $data->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('special')
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

    <div class="col-md d-none d-lg-block">
        <img class="picture" src="/images/image2.png" alt="Image2">
    </div>

</div>

</div>
@endsection

@section('script')
<!-- <script>
    function showOtherDropDown(){
        var x = document.getElementById("category").value;
        if(x == "Gallery"){
            document.getElementById("gallery").classList.remove('d-none');
            document.getElementById("special").classList.add('d-none');
            document.getElementById("regional").classList.add('d-none');
            document.getElementById("galleryInput").required = true;
        }
        else if(x == "Special Projects"){
            document.getElementById("special").classList.remove('d-none');
            document.getElementById("gallery").classList.add('d-none');
            document.getElementById("regional").classList.add('d-none');
            document.getElementById("specialInput").required = true;
        }
        else if(x == "Regional Group"){
            document.getElementById("regional").classList.remove('d-none');
            document.getElementById("gallery").classList.add('d-none');
            document.getElementById("special").classList.add('d-none');
            document.getElementById("regionalInput").required = true;
        }
        else {
            document.getElementById("gallery").classList.add('d-none');
            document.getElementById("regional").classList.add('d-none');
            document.getElementById("special").classList.add('d-none');
        }
    }
</script> -->
@endsection
