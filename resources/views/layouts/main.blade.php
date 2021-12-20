<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>|||</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="flex flex-col h-screen">
    @include('layouts.navbar')
    <div class="">
        @yield('container')
    </div>

    @include('layouts.footer')

    @include('sweetalert::alert')

</body>
</html>
