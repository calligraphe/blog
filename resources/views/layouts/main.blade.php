<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@yield('title', 'Blog')</title>
	<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

	<div class="top-bar">
		<div class="top-bar-left">
			<ul class="menu">
				<li class="menu-text">Blog</li>
				<li><a href="/">Home</a></li>
				<li><a href="/articles">Articles</a></li>
				<li><a href="/contact">Contact</a></li>
				
				@guest 
					<li><a class="nav-link" href="{{ route('login') }}"><b>{{ __('Login') }}</b></a></li>
					@if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}"><b>{{ __('Register') }}</b></a></li>
                    @endif
				@else 
					<li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <b>{{ __('Logout') }}</b>
                    </a> </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            	@endguest
                
			</ul>
		</div>
	</div>

	<div class="callout large primary">
		<div class="row column text-center">
			<h1>Happy Blog</h1>
			<h2 class="subheader">Article paradise</h2>
		</div>
	</div>

	<div class="row medium-8 large-7 columns">
		@yield('content')
	</div>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>
