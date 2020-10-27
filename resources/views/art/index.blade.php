@extends('layouts.app')

@section('content')

<div class="container">
    @can('create art')
        <a href="{{ route('art.create') }}" class="btn btn-link">
            + Artworks
        </a>
    @endcan

    @can(['read reservation', 'cancel reservation', 'sold reservation'])
        <a href="{{ route('art.reserve.index') }}" class="btn btn-link">
            Reservation List
        </a>
    @endcan

    @can('import art')
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#artImport">
            Import
        </button>
    @endcan

    <div class="row">
        <div class="col">
            <table id="myTable" class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Category</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                        @forelse($data as $key => $data)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->status }}</td>
                                <td>{{ $data->category }}</td>
                                <td>
                                    <a href="{{ route('user.show', $data) }}"><i class="fa fa-angle-right"></i></a>
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

@include('services.art_management_modal')

@endsection
