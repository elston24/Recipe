<!DOCTYPE html>
<html lang="en">
<head>
  <title>RECIPES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/style.css')}}">
</head>
<body style="background-color:  #000000">
<h1 style="color: white; text-align: center">WELCOME TO HUNGRY RECIPES</h1>
<div class="row">
    @foreach($recipes as $value)
    <div class="col-md-4" style="max-width: 100%;max-height: 100%;height: 200px;margin-top: 2%;margin-bottom: 2%;">
        <div class="card">
            <img src="{{ asset('frontside/image/'.$value->rimage)  }}" style="max-width: 100%;max-height: 100%;height: 205px;width:425px;">
            <div class="card-body">
                <a href="/recipeinfo/{{ $value->id }}"><p class="card-title">{{ $value->name }}</p></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</body>
</html>


















