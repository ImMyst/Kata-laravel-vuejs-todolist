<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo List - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' }
    </script>
</head>

<body>

@yield('navbar')

<nav class="navbar">
    <div id="date_picker">
        <datepicker></datepicker>
    </div>
</nav>

@yield('content')

<script src="{{asset('js/app.js')}}"></script>
</body>

</html>