<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- Flash Message CSS -->
    {{--  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  --}}
</head>
<body>
    <div id="app">

        <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>

        <nav class="navbar navbar-expand-lg navbar-light mt-4 mb-5">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/logo/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('art.index') }}">Art</a>
                        </li>

                        @canany(['read util','create util','delete util'])
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Art Component
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('art.category.index') }}">Category</a>
                                <a class="dropdown-item" href="{{ route('art.material.index') }}">Material</a>
                                <a class="dropdown-item" href="{{ route('art.medium.index') }}">Medium</a>
                                <a class="dropdown-item" href="{{ route('art.size.index') }}">Size</a>
                                <a class="dropdown-item" href="{{ route('art.style.index') }}">Style</a>
                                <a class="dropdown-item" href="{{ route('art.subject.index') }}">Subject</a>
                                <a class="dropdown-item" href="{{ route('art.status.index') }}">Status</a>
                            </div>
                        </li>
                        @endcan


                        @canany(['read user', 'update user', 'delete user', 'recover user'])
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Management
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('user.index') }}">User</a>
                                    @can('recover user')
                                        <a class="dropdown-item" href="{{ route('user.trash') }}">Garbage</a>
                                    @endcan
                                    <a class="dropdown-item" href="{{ url('syslog') }}">System Log</a>
                                    <a class="dropdown-item" href="{{ route('artist.category.index') }}">Profile Category</a>
                                    <a class="dropdown-item" href="{{ route('export') }}">Export</a>
                                </div>
                            </li>
                        @endcan

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ticket.index') }}">Support</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Museum
                            </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('dabakan.index') }}">Dabakan</a>
                                    <a class="dropdown-item" href="{{ route('kaban.index') }}">Kaban</a>
                                    <a class="dropdown-item" href="{{ route('kulintang.index') }}">Kulintang</a>
                                    <a class="dropdown-item" href="{{ route('heart.index') }}">Heart</a>
                                    <a class="dropdown-item" href="{{ route('lullaby.index') }}">Lullaby</a>
                                    <a class="dropdown-item" href="{{ route('tambol.index') }}">Tambol</a>
                                    <a class="dropdown-item" href="{{ route('lamin.index') }}">Lamin</a>
                                    <a class="dropdown-item" href="{{ route('balangay.index') }}">Balangay</a>
                                    <a class="dropdown-item" href="{{ route('vinta.index') }}">Vinta</a>
                                    <a class="dropdown-item" href="{{ route('bakaw.index') }}">Bakaw</a>
                                </div>
                            </li>
                        </ul>
                    </div>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
<<<<<<< HEAD

=======
>>>>>>> f6ec9eb75ab210900d7aaeb2b0474bbc404bcdf5
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('my.profile', Auth::user()) }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-bell"></i>
                                    <span class="badge badge-light">{{ auth()->user()->unreadNotifications->count() }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @forelse (auth()->user()->unreadNotifications as $notification)
                                        <!-- item-->
                                        <a href="{{ route('notification.read', $notification) }}" class="dropdown-item" data-toggle="tooltip" data-placement="top" title="{{ $notification->created_at->format('l, F d, Y - h:i A') }}">
                                            <p class="font-13"><b>{{ $notification->data['subject'] }}</b> {{ Str::limit($notification->data['body'], 25, '...') }}</p>
                                            <p class="text-muted mb-0">
                                                <small>{{ $notification->created_at->diffForHumans() }}</small>
                                            </p>
                                        </a>
                                    @empty
                                        <div class="text-center">
                                            <a href="#" class="dropdown-item">
                                                No notification yet!
                                            </a>
                                        </div>
                                    @endforelse
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('notification.view') }}" class="text-decoration-none float-left ml-2">See All</a>

                                    @if(auth()->user()->unreadNotifications->count())
                                        <a href="{{ route('notification.clear') }}" class="text-decoration-none float-right mr-2">Mark All as Read</a>
                                    @endif
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @include('flash::message')
        </div>

        <main class="py-4">

            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            @yield('content')
        </main>
    </div>

    @yield('script')

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

    <script>
        $('#flash-overlay-modal').modal();
    </script>

    @include('sweet::alert')
</body>
</html>
