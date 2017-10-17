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
<h1>Bill Splitter</h1>

<form method='GET' action='/'>
	<p><label for='people'>Split how many ways?</label><input type="text" name="people" id="people" value=''></p>

	<p><label for='tab'>How much was the tab? </label><input type="text" name="tab" id="tab" value=''></p>

	<p><label for='tip_amount'>How was the service?</label><select name='tip_amount' id='tip_amount'><option value="18">Good (18% tip) </option><option value="20"> Excellent (20% tip) </option>
	</select></p>

	<p><b>Round up?</b> <input type="checkbox" name="round_up" id="round_up" value="yes"><label for="round_up"> Yes </label></p>

	<p>
	<input type="submit" value="Calculate"></p>

	</form>

<section>
	@yield('errors')
</section>

<section>
	@yield('content')
</section>
	
</body>
</html>