<title>
    @yield('title', 'undefined') | {{ env('APP_NAME') }}
</title>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

@yield('css')
