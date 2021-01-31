<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- CSRFトークン -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>@yield('title')</title>
  </head>
  <body>
    <div>
      @yield('content')
    </div>
  </body>
</html>
