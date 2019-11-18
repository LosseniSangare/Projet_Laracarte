<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>laracarte</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body>
    @include('layouts.partials._nav')
    @yield('content')

    @include('layouts.partials.footer')


    <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>
