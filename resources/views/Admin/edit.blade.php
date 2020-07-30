
<!DOCTYPE HTML>
<html>
<head>
<title>Update | RECIPE</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.min.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/style.css')}}" media="all">
<!--js-->
<script src="{{ asset('admin/js/jquery-2.1.1.min.js') }}"></script> 
<!--icons-css-->
<link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="{{ asset('admin/js/Chart.min.js') }}"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    
<!--geo chart-->

<!--skycons-icons-->
<script src="{{ asset('admin/js/skycons.js') }}"></script>
<!--//skycons-icons-->
</head>
<body style="background-color: black;">	
<div class ="container-fluid">
<form method="post" action="/editrecipe" class="form-group"style="width:50%;color: white;">
@csrf 
@foreach($res as $recipe)
<input type="hidden" name="id" value="{{$recipe->id}}">
<label>NAME:</label>
<input type="text" name="name" value="{{$recipe->name}}" class="form-control"><br>
<label>DURATION:</label>
<input type="text" name="duration" value="{{$recipe->duration}}" class="form-control"><br>
<label>INGEDIENTS:</label>
<input type="text"  name="ingredients" value="{{$recipe->ingredients}}" class="form-control"><br>
<label>RECIPE:</label>
<input type="text"  name="recipe" value="{{$recipe->recipe}}" class="form-control"><br>
<input type="submit" name="add"class="btn btn-info" value="Add Data">
@endforeach
</form>

</body>
</html>
</body>
</html>                     