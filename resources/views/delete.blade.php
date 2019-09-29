<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<form action="deleted" method="POST">
		@csrf
<!--1* select option is used for the update the data using 3rd method applies-->
		<select name="id">
			<option value="1">IBM</option>
			<option value="2">Microsoft</option>
			<option value="3">MyTech</option>
			<option value="4">Google</option>
			<option value="5">Softic</option>
		</select><br><br>
<!--*1-->
		<!--neglect this
		<input type="text" name="name" placeholder="company name"><br><br>
		<input type="text" name="address" placeholder="address"><br><br>-->
		<button type="delete">Delete</button>
	</form>
</body>
</html>