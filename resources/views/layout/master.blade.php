
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="facebook-domain-verification" content="7kd77ulgbho5bl9mgmu5llj54jnxi3" />

    <title>
      Doreaweb, Hosting y Diseño Web Profesional - 
      @yield('title')
    </title>

    {!! SEO::generate() !!}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @include('layout.includes.css')
  </head>
  <body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
