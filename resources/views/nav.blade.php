<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="d-flex flex-direction-row justify-content-between bg-primary py-3 px-4 text-white">
        <a style="color: white" href="">Logo</a>
        <div class="d-flex flex-direction-row">
            <input class="form-control" style="width: 400px" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success btn-light" type="button">Search</button>
        </div>
        <div class="fs-5">
            @if($id == 1)
                <a style="color: white; margin-right:40px; text-decoration: none;" href="">Master User</a>
                <a style="color: white; text-decoration: none;" href="">Logout</a>
            @elseif($id == 2)
                <a style="color: white; text-decoration: none;" href="">Logout</a>
            @endif
        </div>
    </nav>
    
    <br>
    <br>

    <footer class="bg-primary fixed-bottom">
        <h5 class="text-center py-2" style="color: white">Q&A Forum &copy; Copyright 2021</h5>
    </footer>
</body>
</html>