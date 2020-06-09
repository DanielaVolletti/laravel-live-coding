<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <script src="js/app.js" charset="utf-8"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
      <div class="container">
        <div class="header flex">
          @include('header')
        </div>
        <div class="content">
          @yield('content')
        </div>
        <div class="footer flex">
          Footer
        </div>
      </div>
    </body>
</html>
