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

	   /* #01385f */
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

		hr{
			width: 100%;
			border-top: 1px solid #fff;
		}

		.price-date{
			display: flex;
            justify-content: space-between;
		}
        
        .price-date p{
            font-weight: 500;
        }

        .wrapper .details{

        }


		</style>
</head>
<body>

  <div class="wrapper">
  	<h1>{{$data['ad']->title}}</h1>
    <div class="price-date">
    	<div class="price">
    		<p>$ 200<</p>
    	</div>
    	<div class="date">
    		<p>21 March 2020</p>
    	</div>
    </div>
     <hr/>
    <div class="description">
    	<p>{{$data['ad']->description}}</p>
    </div>
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