<!DOCTYPE html>
<html>
<head>
	<title>Education</title>
	@include('includes.style')
</head>
<body>
	<div class="fh5co-loader"></div>
	<div id="page">
		@include('includes.header')
		@yield('content')
		@include('includes.footer')
	</div>
	@include('includes.script')
</body>
</html>