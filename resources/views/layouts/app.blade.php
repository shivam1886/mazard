<!DOCTYPE html>
<html>
<head>
	<title>Bikroykari App</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="">
	<meta name="author" content="Codemeg Solution Pvt. Ltd., info@codemeg.com">
	<meta name="url" content="http://codemeg.com">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
	<!--css-->
    @include('layouts.css')
    @stack('css')
</head>
<body>

    @include('layouts.header')
    
    @section('content')@show

    @include('layouts.footer')

<!--script-->
@include('layouts.js')
@stack('js')
</body>
</html>