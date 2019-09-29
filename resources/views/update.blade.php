<!DOCTYPE html>
<html>
<head>
	<title>Update data</title>
</head>
<body>
	<form action="updated" method="POST">
		@csrf
<!--1* select option is used for the update the data using 3rd method applies-->
		<select name="id">
			<option value="1">IBM</option>
			<option value="2">Microsoft</option>
			<option value="3">MyTech</option>
		</select><br><br>
<!--*1-->
		<input type="text" name="name" placeholder="company name"><br><br>
		<input type="text" name="address" placeholder="address"><br><br>
		<button type="Submit">Update</button>
	</form>
</body>
</html>