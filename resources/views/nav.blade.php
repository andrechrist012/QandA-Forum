<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <nav class="d-flex flex-direction-row justify-content-between bg-primary py-3 px-4 text-white">
        <a style="color: white" href=""><img width="100" height="35" src="{{ url('storage/Q&A FORUM LOGO.png') }}"></a>
        <div class="d-flex flex-direction-row">
        </div>
        <div class="fs-5">
            @if($id == 1)
                <a style="color: white; margin-right:40px; text-decoration: none;" href="/table">Master User</a>
                <a style="color: white; text-decoration: none;" href="">Logout</a>
            @elseif($id == 2)
                <a style="color: white; text-decoration: none;" href="">Logout</a>
            @endif
        </div>
    </nav>
    
    <br>
    @section('isi')  @show
    <br>

    <footer class="bg-primary fixed-bottom">
        <h5 class="text-center py-2" style="color: white">Q&A Forum &copy; Copyright 2021</h5>
    </footer>
</body>
<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#Thread #isiThread").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
</html>