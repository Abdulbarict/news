<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'News') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!--Admin lte css  -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/skin-blue.min.css')}}">
      <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Malayalam Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Malayalam&display=swap" rel="stylesheet">
  <style type="text/css">
    .ml { font-family: 'Noto Sans Malayalam', sans-serif; }
    .active a { cursor: auto; }
    table.table.table-hover tr td {
      vertical-align: middle;
    }
    table.table.table-hover tr td button.btn {
      display: inline-block;
      width: 60px;
      margin: 2px 2px 2px 0;
      padding: 4px 0;
      border-radius: 0;
    }
    .box-header {
      padding: 15px 10px;
    }
    .box-tools a.btn {
      width: auto;
      margin: 0;
      padding: 4px 10px;
      border-radius: 0;
    }
  </style>
</head>
<body>
<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
        <!-- Header  -->
        @include('layouts.partials.header')
        @include('layouts.partials.sidebar')
        @yield('content')
        @yield('list')
    </div>
    <!-- footer -->
    @include('layouts.partials.footer')

</body>
</html>
