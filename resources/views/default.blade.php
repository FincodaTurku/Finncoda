<!doctype html>

<html lang="en">
    <head>
      <meta charset="utf-8">

      <title>FinnCoda - @yield('title')</title>
      <meta name="description" content="Document">
      <meta name="author" content="Jonathan Sarry">

      <!-- Latest compiled and minified CSS -->
      	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    </head>

    <body>

    @include('partials.nav')

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>