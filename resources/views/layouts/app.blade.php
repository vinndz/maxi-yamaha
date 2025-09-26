<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Maxi Yamaha - Admin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Maxi Yamaha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('dashboard-admin') }}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/logout') }}" class="nav-link text-danger">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center py-3"
        style="position: fixed; bottom: 0; left: 0; width: 100%;">
        <small>&copy; {{ date('Y') }} Maxi Yamaha</small>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
