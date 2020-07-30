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
  <h2 style="color: white;">CEREALS AND PULSES</h2>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="{{asset('frontside/image/coriander-powder.jpg')}}" alt="coriander-powder" style="width:300px; height:300px "onclick="myFunction(this);"><br><b style="color: white;">CORIANDER POWDER</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/chives.jpg')}}" alt="chives" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">ARBORIO RICE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/barnyard-millet.jpg')}}" alt="barnyard" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">CHIVES</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/galangal.jpg')}}" alt="galangal" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">GALANGAL</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/tulsi.jpg')}}" alt="tulsi" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">TULSI</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/sage.jpg')}}" alt="sage" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SAGE</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/rosemary.jpeg')}}" alt="rose-mary" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">ROSE MARY</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/yellow-chillies.jpg')}}" alt="yellow-chillies" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">YELLOW  CHILLIES</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/oregano.jpg')}}" alt="oregano" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">OREGANO</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/saffron.jpg')}}" alt="saffron" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SAFFRON</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/salt.jpg')}}" alt="salt" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">SALT</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/mustard-powder.jpg')}}" alt="mustard-powder" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MUSTARD POWDER</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/Paprika.jpg')}}" alt="Paprika" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">PAPRIKA</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/mint-leaves.jpg')}}" alt="mint-leaves"style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MINT LEAVES</b>
  </div>
  <div class="column">
    <img src="{{asset('frontside/image/marjoram.jpg')}}" alt="marjoram" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">MARJORAM</b>
  </div>
    <div class="column">
    <img src="{{asset('frontside/image/lemongrass.jpg')}}" alt="Lemongrass" style="width:300px; height:300px " onclick="myFunction(this);"><br><b style="color: white;">LEMON GRASS</b>
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
