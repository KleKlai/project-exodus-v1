@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Import
    </button>

    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <table id="myTable" class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gallery</th>
                            <th scope="col">Verified</th>
                            <th scope="col">Role</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                            @forelse($data as $key => $data)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        @if(!empty($data->gallery))
                                            {{$data->gallery}}
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>
                                        @if(!empty($data->verified))
                                            <i class="fa fa-check-circle text-success"
                                            data-toggle="tooltip" data-placement="top" title="{{ $data->verified }}"></i>
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>
                                        @foreach($data->getRoleNames() as $role)
                                            <span class="badge badge-success">{{ strtoupper($role) }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('user.show', $data) }}"><i class="fa fa-id-card"></i> </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">No Data</td>
                                </tr>
                            @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('services.user_management_modal')
</div>
@endsection
