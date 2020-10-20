@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Profile


                    <div class="dropdown float-right">
                        <a href="javascript:void();" class="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item
                                {{ (!empty($user->verified)) ? 'd-none' : '' }}"
                                href="{{ route('profile.approve', $user) }}">
                                Approve
                            </a>
                            <a class="dropdown-item" href="{{ route('user.edit', $user) }}">Edit</a>
                            <a class="dropdown-item" href="javascript();" data-toggle="modal" data-target="#deleteAccount">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control-plaintext" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" disabled class="form-control-plaintext" value="{{ $user->email }}">
                        </div>
                        <div class="col-1">
                            <i class="fa fa-check-circle mt-2
                            {{ (!empty($user->verified)) ? 'text-success' : 'd-none' }}"
                            data-toggle="tooltip" data-placement="top" title="{{ $user->verified}}"
                            >
                        </i>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control-plaintext" value="{{ $user->mobile }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control-plaintext" value="{{ $user->category }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Biography</label>
                        <div class="col-sm-10">
                            {{ $user->bio ?? 'none' }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Roles</label>
                        <div class="col-sm-10">
                            @foreach($user->getRoleNames() as $role)
                                <span class="badge badge-success">{{ strtoupper($role) }}</span>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-4">

            <div class="card">
                <div class="card-header">
                    Artwork ({{ $art->count() }})
                </div>
                <div class="card-body">
                    @if(empty($art->count()))
                        <h5 class="text-center">No artwork</h5>
                    @else
                        <ul>
                            @foreach($art as $art)
                                <li>
                                    <a href="{{ route('art.show', $art) }}">
                                        {{ $art->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Activity Log
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Date/Time</th>
                                <th scope="col">Event</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($activity as $activity)
                                <tr>
                                    <td data-toggle="tooltip" data-placement="top" title="{{ $activity->created_at }}">
                                        {{ $activity->created_at->diffForHumans() }}
                                    </td>
                                    <td>{{ $activity->log_name }}</td>
                                    <td>{{ $activity->description }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No Activity</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Login History
                </div>
                <div class="card-body">
                    @if(empty($login->count()))
                        <h5 class="text-center">No Login History</h5>
                    @else
                        <ul>
                            @foreach($login as $login)
                                <li data-toggle="tooltip" data-placement="top" title="{{ $login->created_at }}">
                                    {{ $login->created_at->format('l, M d, yy') }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('services.user_management_modal')
@endsection
