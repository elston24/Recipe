<!DOCTYPE html>
<html lang="en">
<head>
  <title>INGREDIENTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/style.css')}}">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{url('vegetables')}}">VEGETABLES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('spicesherbs')}}">SPICES & HERBS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('cerealspulses')}}">CEREALS & PULSES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('meat')}}">MEAT</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="{{url('dairy')}}">DAIRY PRODUCTS</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="{{url('fruits')}}">FRUITS</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="{{url('seafood')}}">SEA FOOD</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="{{url('sugar')}}">SUGAR PRODUCTS</a>
    </li>
       </ul>
</nav>
<br>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
    <li data-target="#demo" data-slide-to="7"></li>
    <li data-target="#demo" data-slide-to="8"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontside/image/vegetables.jpg')}}" alt="vegetables" style="width: 1520px;height: 600px";>
    </div>
    <div class="carousel-item">
     <img src="{{asset('frontside/image/spices-and-herbs.jpg')}}" alt="spices-herbs" style="width: 1520px;height:600px;">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontside/image/cereals-and-pulses.jpg')}}" alt="cereals-pulses" style="width: 1520px;height: 600px;">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontside/image/meat.jpg')}}" alt="meat" style="width: 1520px;height: 600px;">
    </div>
     <div class="carousel-item">
      <img src="{{asset('frontside/image/dairy-products.jpg')}}" alt="dairy" style="width: 1520px;height: 600px;">
    </div>
     <div class="carousel-item">
     <img src="{{asset('frontside/image/fruits.jpg')}}" alt="fruits" style="width: 1520px;height: 600px;">
    </div>
    <div class="carousel-item">
     <img src="{{asset('frontside/image/seafood.jpg')}}" alt="seafood" style="width: 1520px;height: 600px;">
    </div>
    <div class="carousel-item">
     <img src="{{asset('frontside/image/sugar-and-sugar-products.jpg')}}" alt="sugar" style="width: 1520px;height: 600px;">
    </div>
    <div class="carousel-item">
     <img src="{{asset('frontside/image/nuts-and-oilseeds.jpg')}}" alt="nuts-oilseeds" style="width: 1520px;height: 600px;">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>

































