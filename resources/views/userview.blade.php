<!DOCTYPE html>
<html>
<head>
	<title>Database user view</title>
</head>
<body>
		@foreach($data as $i)
		<li>{{$i->name}}</li>
		@endforeach
</body>
</html>