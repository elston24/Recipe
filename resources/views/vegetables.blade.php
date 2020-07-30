<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body style="background-color: black">

<div style="text-align:center">
  <h2 style="color: white;">VEGETABLES</h2>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="{{asset('frontside/image/bokchoy.jpg')}}" alt="bok choy" style="width:300px; height:300px "onclick="myFunction(this);"><br><b style="color: white;">BOKCHOY</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/snakebeans.jpg')}}" alt="Snake beans" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SNAKE BEANS</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/sorrelleaves.jpg')}}" alt="sorrel leaves" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SORREL LEAVES</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/rocketleaves.jpg')}}" alt="rocket leaves" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">ROCKET LEAVES</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/drumstick.jpg')}}" alt="drumstick" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">DRUMSTICK</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/cherrytomatoes.jpg')}}" alt="cherrytomatoes" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">CHERRY TOMATOES</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/kaffirlime.jpg')}}" alt="kaffirlime" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">KAFFIR LIME</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/spinach.jpg')}}" alt="spinach" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SPINACH</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/plantain.jpg')}}" alt="plantain" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PLANTAIN</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/turnip.jpg')}}" alt="turnip" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">TURNIP</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/sweetpotato.jpg')}}" alt="sweetpotato" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SWEET POTATO</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/roundgourd.jpg')}}" alt="ridgegourd" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">ROUND GOURD</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/ridge-gourd.jpg')}}" alt="ridgegourd" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">RIDGE GOURD</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/pimiento.jpg')}}" alt="onion"style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PIMIENTO</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/onion.jpg')}}" alt="onion" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">ONION</b>
  </div>
    <div class="column">
    <img src="{{asset('frontside/image/mustard.jpg')}}" alt="mutard" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MUSTARD LEAVES</b>
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

</body>
</html>
