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
    <div class="nav">
        <h1 class="align-center">ChatGPT</h1>
    </div>
    <div class="container m-2 p-1">
    <a href="/create"><button type="submit" class="btn btn-primary justify-content-end">Create post</button></a> 
    <div class="container">
        @foreach ($users as $user)
        <p><b>Title</b></p>
        <p>{{ $user->title }}</p>
            <p><b>Content</b></p>
            <p>{{ $user->content }}</p>
            <p><b>Posted by</b></p>
            <p>{{ $user->posted_by }}</p>
            <a href="/edit"><button class="btn btn-primary">Edit</button></a>
            <a href="/destroy"><button class="btn btn-danger">Delete</button></a>
        
        @endforeach
       
    </div>
</div>
</body>
</html>