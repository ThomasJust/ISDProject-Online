<html>
<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
<div class="container">

	<div class="header">
		@include('includes.header')
	</div>
			
	<div class="nav-bar">
		@include('includes.navigation')
	</div>

    <div class="content">
		<div class="main">
            @yield('content')			
		</div>
    </div>

	<div class="footer">
		@include('includes.footer')
	</div>
	
</div>
</body>
</html>

	