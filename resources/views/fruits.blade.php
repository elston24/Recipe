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
  <h2 style="color: white;">FRUITS</h2>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="{{asset('frontside/image/blueberry.jpg')}}" alt="blueberry" style="width:300px; height:300px "onclick="myFunction(this);"><br><b style="color: white;">BLUEBERRY</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/cranberry.jpg')}}" alt="cranberry" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">CRANBERRY</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/jamun.jpg')}}" alt="jamun" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">JAMUN</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/kiwi.jpg')}}" alt="kiwi" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">KIWI</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/lemon.jpg')}}" alt="lemon" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">LEMON</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/lychee.jpg')}}" alt="lychee" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">LYCHEE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/mango.jpg')}}" alt="mango" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MANGO</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/mulberry.jpg')}}" alt="mulberry" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MULBERRY</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/olives.jpg')}}" alt="olives" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">OLIVES</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/orange.jpg')}}" alt="orange" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">ORANGE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/papaya.jpg')}}" alt="papaya" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PAPAYA</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/pears.jpg')}}" alt="pears" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PEARS</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/strawberry.jpg')}}" alt="strawberry" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">STRAWBERRY</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/watermelon.jpg')}}" alt="watermelon"style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">WATERMELON</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/sultana.jpg')}}" alt="sultana" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SULTANA</b>
  </div>
    <div class="column">
    <img src="{{asset('frontside/image/water chestnut.jpg')}}" alt="water chestnut flower" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">WATER CHESTNUT </b>
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
