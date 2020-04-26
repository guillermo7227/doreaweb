
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
      Doreaweb - Diseño y creación de páginas web en Valledupar
      @yield('title')
    </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  </head>
  <body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
