<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">

</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">

            @if (gettype($errors) === 'string')
                <span style="color: red;">{{ $errors }}</span>
            @endif

            <div class="title m-b-md">
                @yield('title')
            </div>

            @yield('content')

        </div>
    </div>
</body>
</html>
