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

                <div id="sidebar" class="
                    col-md-4 
                    col-lg-5
                ">
                    <div id="branding">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1>Lorem Ipsum</h1>
                                <p class="strapline">Just another custom built non-WordPress blog.</p>
                            </div>
                        </div>
                    </div>

                    <div id="trips">
                        <a href="#" class="trip current col-xs-4">
                            <img src="http://placehold.it/250x250" class="img-responsive">
                        </a>
                        <a href="#" class="trip col-xs-4">
                            <img src="http://placehold.it/250x250" class="img-responsive">
                        </a>
                        <a href="#" class="trip col-xs-4">
                            <img src="http://placehold.it/250x250" class="img-responsive">
                        </a>
                        <a href="#" class="trip col-xs-4">
                            <img src="http://placehold.it/250x250" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div id="content" class="
                    col-md-8 
                    col-md-offset-4 
                    col-lg-7
                    col-lg-offset-5
                ">@yield('content')</div>
                
            </div>

        </div>
    </body>
</html>