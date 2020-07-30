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
  <h2 style="color: white;">DAIRY PRODUCTS</h2>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="{{asset('frontside/image/blue-cheese.jpg')}}" alt="blue-cheese" style="width:300px; height:300px "onclick="myFunction(this);"><br><b style="color: white;">BLUE CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/brie-cheese.jpg')}}" alt="brie-cheese" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">BRIE CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/cheddar-cheese.jpg')}}" alt="cheddar-cheese" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">CHEDDAR CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/cream-cheese.jpg')}}" alt="cream-cheese" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">CREAM CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/feta-cheese.jpg')}}" alt="feta-cheese" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">FETA CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/gouda-cheese.jpg')}}" alt="gouda-cheese" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">GOUDA CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/gruyere-cheese.jpg')}}" alt="gruyere-cheese" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">GRUYERE CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/hung curd.jpg')}}" alt="hung-curd" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">HUNG CURD</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/khoya.jpg')}}" alt="khoya" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">KHOYA</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/mascarpone-cheese.jpg')}}" alt="mascarpone-cheese" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MASCARPONE CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/milk.jpg')}}" alt="milk" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MILK</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/mozzarella-cheese.jpg')}}" alt="mozzarella-cheese" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MOZZARELLA CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/parmesan-cheese.jpg')}}" alt="mozzarella-cheese" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PARMESAN-CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/provolone-cheese.jpg')}}" alt="provolone-cheese"style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PROVOLONE-CHEESE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/ricotta-cheese.jpg')}}" alt="ricotta" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">RICOTTA CHEESE</b>
  </div>
    <div class="column">
    <img src="{{asset('frontside/image/yogurt.jpg')}}" alt="yogurt" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">YOGURT</b>
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
