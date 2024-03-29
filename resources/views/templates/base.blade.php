<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/storage/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/footer.css') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>@yield('titulo')</title>
    @yield('css')
</head>
<body>
    @include('templates.header')
    @yield('content')
    @include('templates.footer')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('js')
    @stack('scripts')
</body>
</html>