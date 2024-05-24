<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{asset('assets/images/Logo Only 1.svg')}}" type="image/svg+xml">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <title>PPDB Gotham School</title>
</head>
<body>
    <header class="head">
        @include('ppdb.layouts.partial.header')
    </header>
    <nav class="sidebar">
        @include( 'ppdb.layouts.partial.sidebar' )
    </nav>
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/layout.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    @yield('custom-js')
</body>
</html>
