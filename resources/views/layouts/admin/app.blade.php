<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SENA</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('layouts.admin.components.navbar')
@include('layouts.admin.components.sidebar')


    <div class="main-content">

        <div class="page-content">
            <a href="/">Welcome</a>
            <a href="{{ route('dashboard.perfil') }}">Perfil</a>
            <a href="{{ route('dashboard.index') }}">Index</a>
            @yield('content')
        </div>

        @include('layouts.admin.components.footer')
    </div>
    <!-- end main content-->

</div>


<link rel="stylesheet" href="{{ url('js/app.css') }}">
</body>

</html>
</html>
