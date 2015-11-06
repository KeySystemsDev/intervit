<!DOCTYPE html>
<html lang="en" ng-app="base-name-app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content='{{ csrf_token() }}'>

    <title>.: Base :.</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- bootstrap modules style -->
    <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico" />
	<link href="{{ asset('/bower_components/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
	
	<!-- Style -->
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	@yield('content')

    <!-- jquery modules -->
    <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Angular -->
    <script src="{{ asset('/bower_components/angular/angular.js') }}"></script>

    <!-- your app's js -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/controller.js') }}"></script>
    <script src="{{ asset('/js/service.js') }}"></script>
    <script src="{{ asset('/js/directives.js') }}"></script>

    <!-- angular modules -->
    <script src="{{ asset('/bower_components/angular-resource/angular-resource.min.js') }}"></script>

    <!-- bootstrap modules -->
    <script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	
	
	<!-- ===================== ANGULAR CONTROLLERS ==============================-->
	@yield('controller')
	
</body>
</html>
