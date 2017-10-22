<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title', 'Bill Splitter')
	</title>
	<link rel="stylesheet" type="text/css" href="/css/bill.css">
	<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet">
	@stack('head')

</head>
<body>

<section>
	@yield('form')
</section>

<section>
	@yield('errors')
</section>

<section>
	@yield('content')
</section>
	
</body>
</html>