<!-- Halaman ini berfungsi seperti Layouts/shared -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Attendance System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.navbar')
    @include('layouts.partials.sidebar')

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">
                Employee Attendance System
            </span>
        </div>
    </nav>

    <div class="container mt-4">

        @yield('content')

    </div>

    <!-- <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">
                Fandil - 2026
            </span>
        </div>
    </nav> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
</body>
</html>