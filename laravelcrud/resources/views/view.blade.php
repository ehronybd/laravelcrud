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

<a href="{{url('add')}}" class="btn btn-primary my-2">Add</a>
@if(Session::has('msg'))
<p class="alert alert-success">{{Session::get('msg')}}</p>
@endif
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($showData as $key=>$data)
      <td>{{$key+1}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>
      <a href="{{url('edit-data/'.$data->id)}}" class="btn btn-success">Edit</a>
      <a href="{{url('delete-data/'.$data->id)}}" onclick="return confirm('are you sure you want to delete')" class="btn btn-danger">Delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
{{ $showData->links() }}

</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>
