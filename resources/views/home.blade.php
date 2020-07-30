<!DOCTYPE html>
<html lang="">
<head>
<title>HUNGRY RECIPE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/style.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Flamenco"rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
             <img class="img-fluid" src="{{asset('frontside/image/logo1.png')}}" style="height: 100px;width: 100px;position: relative;right:170px;">
          </div>
          <div class="topnav" style="width: 50%;position: relative;left: 470px;">
                <a class="active" href="{{url('about_us')}}" style="padding: 16px;color: white;font-family: FLAMENCO;">ABOUT US</a>
               <a href="{{url('recipes')}}" style="padding: 16px;color: white;font-family: FLAMENCO;">RECIPES</a>
               <a href="{{url('ingredient')}}" style="padding: 16px;color: white;font-family: FLAMENCO;">INGREDIENT</a>
          </div>
        </div>
    </nav>
  </header>
<div class="container-fluid">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{asset('frontside/image/f1.jpg')}}"  style="width:1500px;height: 500px">
      </div>
      <div class="item">
        <img src="{{asset('frontside/image/f3.jpg')}}" style="width:1500px;height: 500px">
      </div>

      <div class="item">
        <img src="{{asset('frontside/image/f4.jpg')}}"  style="width:1500px;height: 500px">
      </div>
       <div class="item">
        <img src="{{asset('frontside/image/f2.jpg')}}"  style="width:1500px;height: 500px">
      </div>
       <div class="item">
        <img src="{{asset('frontside/image/maincourse.jpg')}}"  style="width:1500px;height: 500px">
      </div>
       <div class="item">
        <img src="{{asset('frontside/image/beverage.jpg')}}" style="width:1500px;height: 500px">
    </div>
    </div>

  
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>

</div>


  
</body>
</html>