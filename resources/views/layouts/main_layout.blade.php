<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adminpage - Responsive Bootstrap Admin Template Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('admin/assets/dist/img/ico/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('admin/assets/dist/img/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('admin/assets/dist/img/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('admin/assets/dist/img/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('admin/assets/dist/img/ico/apple-touch-icon-144-precomposed.png') }}">
    <link href="{{ asset('admin/assets/dist/css/base.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('admin/assets/dist/css/component_ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/dist/css/custom.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @yield('main.layout')
    <script src="{{ asset('admin/assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/lobipanel/lobipanel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/animsition/js/animsition.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootsnav/js/bootsnav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/dist/js/dashboard.js') }}" type="text/javascript"></script>
</body>

</html>
