<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <h1 class="text-center"> Crud Operation </h1>

<div class="container">

<div class="row justify-content-center">
<div class="col-6">
<a href="{{url('/')}}" class="btn btn-primary">view</a>

<form method="POST" action="{{url('/update-data/'.$data->id)}}">


@csrf
<div class="form-group">
<lebel> Name</levbel>
<input type="text" class="form-control" name="name" value="{{$data->name}}">
@error ('name')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
<lebel> Email</levbel>
<input type="text" class="form-control" name="email" value="{{$data->email}}">
@error ('email')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<input type="submit" class="btn btn-success my-3" name="Update">
</form>
</div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>
