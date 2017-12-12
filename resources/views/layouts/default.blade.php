<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', '首页APP') - Laravel 入门教程</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    @include('layouts._header')


    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>

  </body>
</html>