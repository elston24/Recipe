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
  <h2 style="color: white;">MEAT</h2>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="{{asset('frontside/image/beef.jpg')}}" alt="beef" style="width:300px; height:300px "onclick="myFunction(this);"><br><b style="color: white;">BEEF</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/chicken stock.jpg')}}" alt="chicken stock" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">CHICKEN STOCK</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/chops.jpg')}}" alt="chops" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">CHOPS</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/free range chicken.jpg')}}" alt="free range chiken" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">FREE RANGE CHICKEN</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/keema.jpg')}}" alt="keema" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">KEEMA</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/kidney meat.jpg')}}" alt="kidney meat" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">KIDNEY MEAT</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/lamb meat.jpg')}}" alt="lamb meat" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">LAMB MEAT</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/meat stock.jpg')}}" alt="meat stock" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MEAT STOCK</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/mutton.jpg')}}" alt="mutton" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MUTTON</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/organic chicken.jpg')}}" alt="organic chicken" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">ORGANIC CHICKEN </b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/pork.jpg')}}" alt="pork" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PORK</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/skinned chicken.jpg')}}" alt="skinned chicken" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SKINNED CHIKEN</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/turkey.jpg')}}" alt="turkey" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">TURKEY</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/grass fed chicken.jpg')}}" alt="grass fed chicken"style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">GRASS FED CHICKEN</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/ham.jpg')}}" alt="ham" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">HAM</b>
  </div>
    <div class="column">
    <img src="{{asset('frontside/image/partridge.jpg')}}" alt="partridge" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PARTRIDGE</b>
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
