This application monitors employee attendance by recording clock-in and clock-out times, calculating total working hours, and validating the employee's location using GPS during each attendance event.

Features:
- Employee Clock-In & Clock-Out
- Working Hours Calculation
- GPS Location Verification
- Attendance Monitoring Dashboard
- Employee Attendance History
- Late Arrival Detection
- Overtime Calculation
- Geofencing Validation
- Attendance Reports and Analytics

Laravel memiliki beberapa starter kit autentikasi:
Package	            | Cocok untuk	                    |Rekomendasi
Laravel Breeze      | Belajar & aplikasi internal	    | ✅ Ya
Laravel Jetstream	| Aplikasi besar (Team, API, dll.)	| Nanti
Laravel Fortify	    | Backend authentication saja	    | Belum
Laravel UI	        | Versi lama	                    | Tidak

Yang Akan Didapat dari Breeze
Setelah install, kita langsung memiliki:
✅ Login
✅ Logout
✅ Register (nanti bisa kita nonaktifkan)
✅ Forgot Password (opsional)
✅ Middleware
✅ Session
✅ Validasi Login
Semua dibuat mengikuti best practice Laravel.

Konsep Autentikasi di Laravel:
Login
↓
Session
↓
Middleware
↓
Controller

INFO  Discovering packages:
  laravel/breeze 
  laravel/pail
  laravel/sail
  laravel/tinker 
  nesbot/carbon
  nunomaduro/collision
  nunomaduro/termwind

//check node, install first if not ready
node -v
npm -v
//next
composer require laravel/breeze --dev
php artisan breeze:install

choose option 'blade' (#1)
Which Breeze stack would you like to install?
  Blade with Alpine ............................................ blade
  Livewire (Volt Class API) with Alpine ..................... livewire
  Livewire (Volt Functional API) with Alpine ..... livewire-functional
  React with Inertia ........................................... react
  Vue with Inertia ............................................... vue
  API only ....................................................... api
//answer
blade

Which testing framework do you prefer? [Pest]
Pest ............................................................... 0
PHPUnit ............................................................ 1
//answer
1

