<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hello Laravel</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
 
  </head>

  <body>		
		<nav>
			@yield('menu')
		</nav>
    
		<div>
			@yield('content')
		</div>
    
		<footer>
			@yield('footer')
		</footer>
    
	</body>
</html>
		