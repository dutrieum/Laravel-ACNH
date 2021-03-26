<!DOCTYPE html>
<html lang="fr" xmlns:og="http://ogp.me/ns#">
<head>
  <meta charset="utf-8" />
  <meta name="author" content="Mathilde Dutrieux" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
  <title>ACNH API</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
</head>

<body>
    <header>
      @include('layout.header')
    </header>
    @yield('content')
    <footer>
      @include('layout.footer')
    </footer>
</body>

</html>