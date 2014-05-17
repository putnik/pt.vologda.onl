<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>

	{{-- jQuery --}}
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	{{-- Bootstrap --}}
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href="/css/sticky-footer-navbar.css" rel="stylesheet">
	<link href="/css/styles.css" rel="stylesheet">

	{{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	{{-- Leaflet --}}
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
	<script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Развернуть меню</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Транспорт Вологды</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/map">Карта</a></li>
					<li><a href="/contact">Контакты</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<!-- Begin page content -->
	<div class="container">
	@section('content')
		<div class="page-header">
			<h1>Sticky footer with fixed navbar</h1>
		</div>
		<p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
		<p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
	@show
	</div>

	<div id="footer">
		<div class="container">
		@section('footer')
		@show
		</div>
	</div>
</body>
</html>