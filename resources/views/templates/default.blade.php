<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="utf-8">
    <title>MatBoksen</title>
        <!-- CSS -->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('includes/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('includes/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('includes/css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('includes/css/style.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ URL::asset('includes/ico/favicon.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('includes/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('includes/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('includes/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('includes/ico/apple-touch-icon-57-precomposed.png') }}">
</head>
<body>
    @include('templates.partials.navigation')
    <div class="container">
        @include('templates.partials.alerts')
        @yield('content')
    </div>
</body>
        <!-- Javascript -->
        <script src="{{ URL::asset('includes/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ URL::asset('includes/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('includes/js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ URL::asset('includes/js/scripts.js') }}"></script>
        <script src="{{ URL::asset('includes/js/formscript.js') }}"></script>
</html>