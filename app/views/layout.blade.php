<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ isset($title) ? $title : 'Pradinis' }} - 3stepshop</title>
<base href="{{ url() }}" />
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ url() }}/css/style.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ url() }}/js/main.js" type="text/javascript"></script>
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url() }}"><img src="{{ url() }}/img/logo.png" alt="" /></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url() }}">Paslaugos</a></li>
                    <li><a href="{{ url() }}/krepselis">Apie mus</a></li>
					<li><a href="{{ url() }}/kontaktai">Kontaktai</a></li>
					<li><a href="{{ url() }}/admin">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
		<h1>3 step shop</h1>
		@yield('content')
	</div>

	<div class="container">
		<div class="row">
			<div class="center-text">
				<p>&copy; {{ date('Y') }} 3 step shop</p>
			</div>
		</div>
    </div>
</body>
</html>