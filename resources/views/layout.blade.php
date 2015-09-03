<!DOCTYPE html>
<html>
    <head>
        <title>FinnCoda - @yield('title')</title>
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
                {{--pulling in compiled Bootstrap--}}
        <link rel="stylesheet" href="{{ url('/css/app.css') }}">

        <link rel="stylesheet" href="{{ url('/css/libs.css') }}">
    <body>

        @include('partials.navbar')

       	<div class="container">

       		@yield('content')

   		</div>


        @include('partials.footer')
        

         <!--Scripts-->
        <script src="{{ url('Scripts/script.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ url('/js/libs.js') }}"></script>
        @include('flash')
    </body>
</html>
