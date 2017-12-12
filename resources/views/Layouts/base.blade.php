<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
			
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
	
	@yield('content')
	<div>
	@include('includes.menu')
	</div>
	@if($end == 'contact')
		Контакты
	@else
		<a href="#">Контакты</a>
	@endif
		@if($end == 'news')
			Новости
		$else 
			<a href="#">Новости</a>
		@endif
    </body>
</html>