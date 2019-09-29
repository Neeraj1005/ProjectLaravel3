<!DOCTYPE html>
<html>
<head>
	<title>Inset data</title>
</head>
<body>
	<form action="submit" method="POST">
		@csrf
		<input type="text" name="name" placeholder="company name"><br><br>
		<input type="text" name="address" placeholder="address"><br><br>
		<button type="Submit">Submit</button>
	</form>
</body>
</html>