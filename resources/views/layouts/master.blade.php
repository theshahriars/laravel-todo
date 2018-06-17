<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{ url('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ url('admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('style')
</head>

<body>
<div id="wrapper">
    @include('partials._master_navbar')
    <div class="container">
        @yield('content')
    </div>
</div>
<script src="{{ url('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('admin/vendor/metisMenu/metisMenu.min.js') }}"></script>
<script src="{{ url('admin/vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ url('admin/dist/js/sb-admin-2.js') }}"></script>
@yield('script')
</body>
</html>
