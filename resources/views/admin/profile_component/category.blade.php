@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{ route('artist.category.create') }}" class="btn btn-primary">+ Gallery</a>

    <table id="myTable" class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $key => $data)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ Str::limit($data->description ?? '-', 40, '...') }}</td>
                    <td>
                        <form action="{{ route('artist.category.destroy', $data) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('artist.category.edit', $data) }}" class="btn btn-link">Edit</a>

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
