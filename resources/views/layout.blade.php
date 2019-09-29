<!DOCTYPE html>
<html>
<head>
	@section('head')
	<!--we use csrf token-->
	<meta charset="utf-8" name="csrf-token" content="{{csrf_token()}}">
	<!--we have used js file-->
	<script src="{{ asset('js/app.js') }}"></script>
	<!--we have used css file-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	@show
</head>
<body>

	@section('header')
	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#">Features</a>
					<a class="nav-item nav-link" href="#">Pricing</a>
					<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</div>
			</div>
		</nav>
	</div>
	@show
</body>
<!--Access jquery-->
<script>
	$(document).ready(function(){
		console.warn('echo code')
	})
</script>
</html>