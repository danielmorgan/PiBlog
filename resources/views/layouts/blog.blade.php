<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - Pi's Trips</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="blog @yield('body-class')">
        <div class="container-fluid">
            <div class="row">
                <div id="sidebar" class="col-md-5">
                    <div id="featured-photo"></div>
                    <i class="menu-button shut icon-close"></i>
                    @include('includes.sidebar')
                </div>

                <div id="content" class="col-md-7 col-md-offset-5 nopadding">
                    <i class="menu-button open icon-menu"></i>
                    @yield('content')
                </div>
            </div>
        </div>

        @include('errors.flash')
        <script src="/js/app.js"></script>
    </body>
</html>
