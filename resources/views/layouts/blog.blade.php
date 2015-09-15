<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - Pi's Trips</title>
        <link rel="stylesheet" href="css/app.css">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid">

            <div class="row">
                @include('layouts.header')
            </div>

            <div class="row">
                <div id="sidebar" class="col-xs-hidden col-sm-4 col-lg-6"></div>
                <div id="content" class="col-xs-12 col-sm-8 col-lg-6">@yield('content')</div>
            </div>

        </div>
    </body>
</html>