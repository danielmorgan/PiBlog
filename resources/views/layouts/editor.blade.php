<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - Pi's Trips Editor</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="editor @yield('body-class')">
        <div class="container-fluid">
            <div class="row">
                <div id="header" class="col-xs-12">
                    <div class="row">
                        <a href="/editor" class="col-xs-12 col-sm-2">
                            <h1>Editor</h1>
                        </a>
                        <div class="actions col-xs-12 col-sm-10">
                            <a href="/editor/post/create" class="btn">+ Create Post</a>
                            <a href="/" class="btn">&nwarr; Back to blog</a>
                            <a href="/auth/logout" class="btn">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="content" class="col-xs-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('errors.flash')
        <script src="/js/app.js"></script>
    </body>
</html>
