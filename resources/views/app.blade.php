<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tipografia - Nicole Castaneda</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('assets/css/css/font-awesome.min.css') }}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-colorpicker.min.css') }}" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    @yield('header')
    @yield('content')

    @extends('_blocks/footer')

    @extends('_blocks/js')
  </body>
</html>
