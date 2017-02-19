<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Laravel 5.4 from Scratch App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-awusxf8AUojygHf2+joICySzB780jVvQaVCAt1clU3QsyAitLGul28Qxb2r1e5g+" crossorigin="anonymous">
    <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"-->

    <!-- Blog CSS -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

</head>
<body>


    @include('layouts.nav')

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Mi Blog con Bootstrap</h1>
            <p class="lead blog-description">Blog profesional en Laravel 5.4</p>
            <hr>
        </div><!-- .container -->
    </div><!-- .blog-header -->


    <div class="container">

        <div class="row">
            <div class="col-md-3">

                @include('layouts.sidebar')

            </div><!-- .col-md-3 -->

            <div class="col-md-9">

                @yield('content')

            </div><!-- .col-md-9 -->
        </div><!-- .row -->

    </div>

    @include('layouts.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
