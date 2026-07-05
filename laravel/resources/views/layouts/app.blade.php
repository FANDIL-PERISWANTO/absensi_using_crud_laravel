<!-- Halaman ini berfungsi seperti Layouts/shared -->
<!DOCTYPE html>
<html lang="en">
<head>
     @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.navbar')
   
    <div class="container mt-4">

        <div class="row">

            <div class="col-md-3">

                @include('layouts.partials.sidebar')

            </div>

            <div class="col-md-9">

                @yield('content')

            </div>

        </div>

    </div>
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
</body>
</html>