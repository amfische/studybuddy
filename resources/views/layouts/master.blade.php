<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


  <title>{{ env('APP_NAME') }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body>

	<div class="container-fluid">
		@yield('content')	
	</div>
	


</body>
</html>
