@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Deleted</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

                @forelse($data as $key => $data)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->category }}</td>
                        <td data-toggle="tooltip" data-placement="top" title="{{ $data->deleted_at }}">
                            {{ $data->deleted_at->diffForHumans() }}
                        </td>
                        <td>
                            <button form="restore" class="btn btn-link"> <i class="fa fa-undo"></i> Restore</button>
                            <form id="restore" action="{{ route('user.restore', $data->id) }}" method="POST" class="d-none">
                                @csrf
                                @method('PATCH')
                            </form>

                            <button class="btn btn-outline-danger" form="force-delete"> <i class="fa fa-trash-o"></i> Purge</button>

                            <form id="force-delete" action="{{ route('user.force.delete', $data->id) }}" method="POST" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
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
@endsection
