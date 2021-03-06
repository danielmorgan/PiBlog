<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - Pi's Trips</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="simple @yield('body-class')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('errors.flash')
        <script src="/js/app.js"></script>
    </body>
</html>
