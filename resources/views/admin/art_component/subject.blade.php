@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subject">
        + Subject
    </button>

    @include('services.art_component_modal')

    <table id="myTable" class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Label</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $key => $data)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->description ?? '-' }}</td>
                    <td>
                        <form action="{{ route('art.subject.destroy', $data) }}" method="post">
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
