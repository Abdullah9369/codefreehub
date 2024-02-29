<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
     @if (env('APP_ENV') == 'local')
        @vite(["resources/scss/style.css"])
    @else
        <link rel="stylesheet" href="{{ asset('build/assets/app-PxY9imkf.css')}}" />
    @endif
   
</head>
<body>
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
</body>
</html>