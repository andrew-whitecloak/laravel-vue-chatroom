<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    @foreach([
      'assets/css/app.css',
      'assets/css/main.css'
    ] as $styledep)
    {!! Html::style($styledep) !!}
    @endforeach
  </head>
  <body >
  @include('includes.header')
  @yield('content')
  @include('includes.footer')
  {!! Html::script('assets/js/app.js') !!}
  </body>
</html>
