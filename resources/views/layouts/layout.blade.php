<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','App.com')</title>
  <style>
    .active a{
      color:green;
      text-decoration:none;
    }
  </style>
</head>
<body>
  @include('partials.nav')
  @yield('content')
</body>
</html>