<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name','Fille Rouge')}}</title>
</head>
<body>
    @include('components.nav')
<div class="container">
    @yield('contant')
</div>
    
    
</body>
</html>