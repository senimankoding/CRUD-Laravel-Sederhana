<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>

	<header>
		<nav>
			<a href="/blog/public">Home</a>
			<a href="/blog/public/blog">Blog</a>
		</nav>	
	</header><!-- /header -->
	<br>

	@yield('content')

	<br>

	<footer>
		&copy; laravel & senimankoding
	</footer>

</body>
</html>