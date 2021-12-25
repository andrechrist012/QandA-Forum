<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Master User</title>
</head>
<body>
        <nav class="d-flex flex-direction-row justify-content-between bg-primary py-3 px-4 text-white">
            <a style="color: white" href=""><img width="100" height="35" src="{{ url('storage/Q&A FORUM LOGO.png') }}"></a>
            <div class="d-flex flex-direction-row">
            </div>
            <div class="fs-5">
                @if($id == 1)
                    <a style="color: white; margin-right:40px; text-decoration: none;" href="">Hi, Admin</a>
                @endif
            </div>
        </nav>

    <div class="container">

        <div class="row">
            <h3 class="p-2 text-primary text-start">Master User</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $value)
                        <tr>
                            <th>{{$value->name}}</th>
                            <th>{{$value->email}}</th>
                            <th><a class="text-danger">DELETE</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <footer class="bg-primary fixed-bottom">
            <h5 class="text-center py-2" style="color: white">Q&A Forum &copy; Copyright 2021</h5>
        </footer>

    </div>
</body>
</html>