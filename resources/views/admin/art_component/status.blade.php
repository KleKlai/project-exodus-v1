@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#status">
        + Status
    </button>

    @include('services.art_component_modal')

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Label</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $key => $artStatus)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $artStatus->name }}</td>
                    <td>{{ Str::limit($artStatus->description ?? '-', 60, '...') }}</td>
                    <td>
                        <form action="{{ route('art.status.destroy', $artStatus) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-link">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No Data Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
