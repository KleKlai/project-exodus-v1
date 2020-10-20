@extends('layouts.app')

@section('content')
<div class="container">

    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link active" href="javascript:void();">Profile</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="#">History</a>
        </li> --}}
    </ul>

    <p class="font-weight-bold">Account</p>

    <form method="POST" action="{{ route('profile.update', $user) }}">
        @csrf
        @method('PATCH')

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword4">Full Name</label>

                <div class="input-group mb-2">
                    @if(!empty($user->verified))
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-check-circle"></i></div>
                        </div>
                    @endif
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" {{ (!empty($user->email_verified_at)) ? 'readonly' : '' }}>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Mobile</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">+63</div>
                    </div>

                    <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                        name="mobile"
                        value="{{ old('mobile', $user->mobile) }}"
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
            <div class="form-group col-md-6">
                <label for="inputAddress">Gallery</label>
                <select name="category" class="form-control" name="category"
                {{ (!empty($user->category)) ? 'disabled' : ''}}>
                    <option value="">-</option>
                    @foreach($gallery as $gallery)
                        <option value="{{ $gallery->name }}" {{ ($user->category == $gallery->name) ? 'selected' : '' }}>{{ $gallery->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Biography</label>
            <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" name="bio" rows="4" style="white-space: pre-wrap;">{{ $user->bio }}</textarea>

            @error('bio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-success">Save</button>
    </form>

    <hr>

    <p class="font-weight-bold">Password</p>

    <form method="POST" action="{{ route('password.change', $user) }}">
        @csrf
        @method('PATCH')

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputPassword4">Current Password</label>
                <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required>
                @error('current_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">New Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Retype Password</label>
                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-success">Change Password</button>
    </form>

    <hr>

    <p class="font-weight-bold">Delete Account</p>

    <p class="font-weight-normal">
        {{ "If you delete your account, your personal information will be wiped from Mindanao Art servers, all of your art activity will be anonymized. This action cannot be undone!" }}
    </p>

    <!-- Button trigger Delete modal -->
    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteAccount">
        Delete account
    </button>

</div>

@include('services.profile_modal');
@endsection
