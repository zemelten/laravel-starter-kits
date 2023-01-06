<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="/store" method="post">
        @csrf
        <div class="form-group mt-4">
          
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="post title">
          
        </div>
        <div class="form-group mt-2">
          <textarea name="content" id="content" cols="20" rows="5" placeholder="your commments here."></textarea>
        </div>
      
        <button type="submit" class="btn btn-primary">Add</button>
      </form> 
    </div>
</body>
</html>