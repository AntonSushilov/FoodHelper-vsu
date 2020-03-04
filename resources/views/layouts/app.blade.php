<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FoodHelper</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
	<link rel="stylesheet"  href="css/app.css">
	
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
	@include('inc.header')
	@yield('content')

	@include('inc.footer')
</body>
</html>