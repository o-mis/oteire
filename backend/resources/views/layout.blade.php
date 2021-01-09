<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRFトークン -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- BootStrap -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script src="{{ asset('js/app.js') }}"></script>

      <title>@yield('title')</title>
  </head>
  <body>
    <div>
      <button type="button" class="btn btn-primary">Primary</button>
      {{-- @yield('content') --}}
    </div>
  </body>
</html>
