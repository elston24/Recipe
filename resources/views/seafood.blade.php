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
<body style="background-color:black">

<div style="text-align:center">
  <h2 style="color: white;">SEA FOOD</h2>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="{{asset('frontside/image/flounder.jpg')}}" alt="flounder" style="width:300px; height:300px "onclick="myFunction(this);"><br><b style="color: white;">FLOUNDER</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/haddock.jpg')}}" alt="haddock" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">HADDOCK</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/hilsa.jpg')}}" alt="hilsa" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">HILSA</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/mussels.jpg')}}" alt="mussels" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MUSSELS</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/pearl spots.jpg')}}" alt="pearl spots" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PEARL SPOTS</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/perch.jpg')}}" alt="perch" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PERCH</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/pomfret.jpg')}}" alt="pomfret" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">POMFRET</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/prawns.jpg')}}" alt="prawns" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PRAWNS</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/salmon.jpg')}}" alt="salmon" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SALMON</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/sardines.jpg')}}" alt="sardines" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SARDINES</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/shark.jpg')}}" alt="shark" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SHARK</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/shellfish.jpg')}}" alt="shellfish" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SHELLFISH</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/shrimp.jpg')}}" alt="shrimp" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SHRIMP</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/squid.jpg')}}" alt="squid"style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SQUID</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/sultana.jpg')}}" alt="sultana" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SULTANA</b>
  </div>
    <div class="column">
    <img src="{{asset('frontside/image/tuna fish.jpg')}}" alt="tuna" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">tuna</b>
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
