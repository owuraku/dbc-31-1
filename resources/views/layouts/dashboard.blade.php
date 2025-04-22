<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <style>
        .sidebar {
            height: 100vh;
            /* Full viewport height */
            background-color: #343a40;
            /* Dark background color */
            color: white;
            padding-top: 3.5rem;
            /* Adjust based on navbar height if you have one */
        }

        .sidebar a {
            padding: 0.8rem 1rem;
            display: block;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            padding: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Bookings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('title')</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <img src="{{ Storage::url(auth()->user()->image) }}" style="border-radius: 50%" width="60"
                            height="60" alt="">
                        <p>Welcome, {{ auth()->user()->name }}</p>
                        {{-- <p>Welcome, {{ Auth::user()->name }}</p> --}}
                    </div>
                </div>
                @if (Session::has('message'))
                    <p class="alert alert-{{ Session::get('key', 'info') }}">{{ Session::get('message') }}</p>
                @endif
                {{-- <h2>@yield('title')</h2> --}}
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
