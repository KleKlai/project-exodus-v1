@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <div class="row container-fluid pb-4">
            <div class="col-md">
                <form action="/artist" class="flex flex-row">
                    <input
                        value="{{ $search }}"
                        type="search"
                        name="search"
                        class="w-1/3 border-2 px-1 rounded-r-none rounded-l"
                        placeholder="search artist"
                        onchange="this.form.submit()"
                    >
                    <button style="border-radius: 0 0.25rem 0.25rem 0;" class="btn btn-outline-secondary" type="button" onclick="this.form.submit()">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>

        <div id="artist-cards" class="row">
            @foreach($user as $artist)
                <div class="col-md-4">
                    <a href="{{ route('landing.artist.profile', $artist) }}">
                        <div class="picture-container background-image" style="background-image: url('{{ url('storage/artwork/'.$artist->art->first()->attachment) }}');"></div>
                        <p class="picture-title link">{{ $artist->name }}</p>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="container flex flex-row items-center justify-center">
            @if ($user->previousPageUrl())
                <a href="{{ $user->previousPageUrl() }}&search={{ $search }}">
                    <i class="fas fa-chevron-left text-xl flex items-center pt-1"></i>
                </a>
            @else
                <i class="fas fa-chevron-left text-xl flex items-center text-gray-400"></i>
            @endif

            <div class="mx-2 px-3 pt-1 flex items-center bg-gray-200 rounded-full pb-1">
                {{ $user->firstItem() }} to {{ $user->lastItem() }} of {{ $user->total() }}
            </div>

            @if ($user->nextPageUrl())
                <a href="{{ $user->nextPageUrl() }}&search={{ $search }}">
                    <i class="fas fa-chevron-right text-xl pt-1"></i>
                </a>
            @else
                <i class="fas fa-chevron-right text-xl text-gray-400"></i>
            @endif
        </div>

        {{--  <div id="artist-table">
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
        </div>  --}}
    </div>
@endsection
