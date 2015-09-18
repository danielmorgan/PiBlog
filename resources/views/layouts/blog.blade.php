<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - Pi's Trips</title>

        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                @include('layouts.header')
            </div>

            <div class="row">
                <i class="menu-button"></i>

                <div id="sidebar" class="col-md-4 col-lg-5">
                    @include('layouts.sidebar')
                </div>

                <div id="content" class="col-md-8 col-md-offset-4 col-lg-7 col-lg-offset-5">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
