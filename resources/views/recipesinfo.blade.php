<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.css')}}">
</head>
<body>
<div class="container">
	<div class="row">
		@foreach($value as $recipe)
		<div  class="col-sm-12">
			<div style="align-content: center;" class="card">
			<img style="align-content: center; margin-left: 400px; " src="{{ asset('frontside/image/'.$recipe->rimage)}}" width="400" height="400"  >
				<div class="card-body">
                <p style="text-align: center" class="card-title"><b style="font-size: 30px">{{ $recipe->name }}</b></p>
            </div>
            <div class="card-body">
                <p  class="card-title"><b>DURATION: {{ $recipe->duration }}</b></p>
            </div>
            <div class="card-body">
                <p  class="card-title"><b>INGREDIENTS:<br> {{ $recipe->ingredients }}</b></p>
            </div>
            <div class="card-body">
                <p  class="card-title"><b>RECIPE:<br> {{ $recipe->recipe }}</b></p>
            </div>
			</div>
		</div>
		@endforeach
	</div>
</div>
</body>
</html>