
<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <title>Movie_db</title>
</head>
<body>
    @include('partial.navbar')
  
    @yield('content')

    @include('partial.footer')
    <script src="{{asset('js/app.js')}}"></script>
</body>    
</html>