<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <div class="container-fluid">
            <header class="navbar navbar-fixed-top">
                <nav class="navbar navbar-inverse bg-faded">
                    <div class="container-fluid">
                        <ul class="navbar-nav nav">
                            <li>
                                <a class="btn btn-secondary" href="{{ URL::to('members/') }}">Manage Volunteers</a>
                            </li>
                            <li>
                                <a class="btn btn-secondary" href="#">Manage Opportunities</a>
                            </li>
                            <li>
                                <a class="btn btn-secondary" href="about">About Us</a>
                            </li>
                        </ul>
                        <form class="form-inline navform my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </header>
        </div>
        <div class="container-fluid">
            <div id="main">
                @yield('content');
            </div>
        </div>
    </body>
    <footer>
        <div class="container-fluid">
            <div id="copyright text-right">&copy; Copyright 2017 Initech</div>
        </div>
    </footer>
</html>
