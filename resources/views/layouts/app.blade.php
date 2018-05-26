<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home') | {{config('app.name')}}</title>
    @section('css')
        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    @show
</head>
<body>
@include('layouts.components.navigation')
<div class="jumbotron text-center">
    <h1 class="display-4 ">@yield('header-text', 'Contact In')</h1>
    @auth
        <a href="#" class="btn btn-login">LOGIN!</a>
        <a href="#" class="btn">SIGNUP!</a>
    @endauth
</div>
<div class="container">
    @section('content') @show
</div>
@section('js')
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
@show
</body>
</html>