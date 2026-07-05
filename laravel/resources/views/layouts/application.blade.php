<!-- Halaman ini berfungsi seperti Layouts/shared -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- memasukkan partial view head -->
    @include('layouts.partials.head')
</head>
<body>
    <!-- memasukkan partial view navbar -->
    @include('layouts.partials.navbar')
   
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2">
                <!-- memasukkan partial view sidebar -->
                @include('layouts.partials.sidebar')

            </div>

            <div class="col-md-10">

                <!-- placeholder yang akan diisi oleh section 
                (berdasarkan view yang diakses di browser) 
                yang telah menggunakan 
                @extends('layouts.app')-->
                @yield('content')

            </div>

        </div>

    </div>
    <!-- memasukkan partial view footer -->
    @include('layouts.partials.footer')
    <!-- memasukkan partial view scripts -->
    @include('layouts.partials.scripts')
</body>
</html>