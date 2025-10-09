<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common1.css') }}">
  @yield('css')
  <title>@yield('title')</title>
</head>
 <header >FashionablyLate
   @yield('header')</header>
   <body>
    
  <main>
    @yield('content')
  </main>
  
</body>

</html>