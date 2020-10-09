<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Yusuf Hidayat'}}</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    @yield('head')

</head>
<body>
    @include('layout.navigation')
    <div class="py-4">
        @include('alert')
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>