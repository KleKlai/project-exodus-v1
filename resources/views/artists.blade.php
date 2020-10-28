@extends('layouts.landing')

@section('landing')
<div class="container mt-5">
    <div class="row">

        @foreach($user as $artist)
        <div class="col-md-4">
            <a href="{{ route('landing.artist.profile', $artist) }}">
                <div class="picture-container background-image" style="background-image: url('{{ url('storage/artwork/'.$artist->art->first()->attachment) }}');"></div>
                <p class="picture-title link">{{ $artist->name }}</p>
            </a>
        </div>
        @endforeach

    </div>

    <table id="myTable" class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
                @forelse($user as $key => $artist)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $artist->name }}</td>
                        <td>
                            <a href="{{ route('landing.artist.profile', $artist) }}"><i class="fa fa-angle-right"></i></a>
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
