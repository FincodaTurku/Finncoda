<!doctype html>

<html lang="en">
    <head>
      <meta charset="utf-8">

      <title>FinnCoda - @yield('title')</title>
      <meta name="description" content="Document">
      <meta name="author" content="Jonathan Sarry">

        {{--pulling in compiled Bootstrap--}}
        <link rel="stylesheet" href="{{url('/css/app.css')}}">

        <link rel="stylesheet" href="{{url('/css/libs.css')}}">


    </head>

    <body>

    @include('partials.nav')

        <div class="container">
            @yield('content')
        </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{url('/js/libs.js')}}"></script>
    @include('flash')
    </body>
</html>