<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>veeLog</title>
	<link rel="shortcut icon" href="{{ URL::asset('assets/images/icon.ico') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container-fluid">
		<div class="container-1 col-md-10">
			@yield('content-1')
		</div>
		<div class="container-2 col-md-2">
			@yield('content-2')
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{ URL::asset('assets/js/menu.js') }}"></script>
</body>
</html>