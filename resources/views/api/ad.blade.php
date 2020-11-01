<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
	<meta name="keywords" content="mazard">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/backend/images/favicon-icon.png')}}">
	<!--css-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/bootstrap.min.css">
	<!--font awesome 4-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/fonts/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/app.css">
	<style type="text/css">
		body{
			background: #000;
            color:#fff;		
		}

		.price{
			color: #01385f;
			font-weight: bold;
			text-align: left;
			display: inline-block;
		}
         
		.date{
           text-align: right;
           display: inline-block;
		}

		.title,.date{
			color: #fff;
		}

		hr{
			width: 100%;
			border-top: 1px solid #fff;
		}

		table{
			width: 100%;
		}

		</style>
</head>
<body>

  <div class="wrapper">
  	 <table>
  	 	<tr>
  	 		<th colspan="2"><h1>{{$data['ad']->title}}</h1></th>
  	 	</tr>
  	 	<tr>
  	 		<th><p class="price">$ {{$data['ad']->price}}</p></th>
  	 		<th>{{date('d M Y',strtotime($data['ad']->created_at))}}</th>
  	 	</tr>
  	 	<tr>
  	 		<td colspan="2">Description</td>
  	 	</tr>
  	 	<tr>
  	 		<tr><th colspan="2">{{$data['ad']->description}}</th></tr>
  	 	</tr>
  	 </table>
  </div>  

</body>
 <!--script-->
<script type="text/javascript" src="{{asset('public/backend')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('public/backend')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('public/backend')}}/js/sweetalert.min.js"></script>
<style type="text/css">
	form{
		padding: 10px;
	}
</style>
</html>