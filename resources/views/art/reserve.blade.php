@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card card-body">
        <h3>Reservation</h3>
        <table id="myTable" class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">User</th>
                    <th scope="col">Valid Till</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                    @forelse($data as $key => $data)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                <a href="{{ route('art.show', $data->art) }}">
                                    {{ $data->art->title }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('user.show', $data->user) }}">
                                    {{ $data->user->name }}
                                </a>
                            </td>
                            <td>{{ $data->validity->format('F d, Y')}}</td>
                            <td>
                                <a href="{{ route('art.reserve.cancel', $data) }}" class="btn btn-link">
                                    <i class="fa fa-ban"></i>
                                </a>

                                <a href="{{ route('art.sold', $data) }}" class="btn btn-link">
                                    <i class="fa fa-check"></i>
                                </a>
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
@endsection
