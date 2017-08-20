<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Volunteer System</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        @include('_header')
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @elseif (Session::has('error'))
                <div class="alert alert-warning">{{Session::get('error') }}</div>
            @endif
            <div id="main">
                @include('_messages')
                @yield('content')
            </div>
        @include('_footer')
    </body>
</html>
