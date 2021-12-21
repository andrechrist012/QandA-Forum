{{-- @section('isi') --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<center>

    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#Thread .text").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>

    <input id="myInput" type="text" placeholder="Search..">
{{-- @foreach() --}}
    <Thread id="Thread">
    <div id="isiThread">
        <div class="container border border-dark rounded mt-5">
        
            <div class="text-left"><strong>What is Lorem</strong> Category 3</div>
            <div class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus
                laboriosam eius voluptas inventore possimus libero repellendus natus, 
                enim, incidunt minima omnis distinctio nulla ab voluptatibus similique rem sunt quaerat dolore.</div>
            <div class="text-right">4 Nov 2021</div>
            <div class="text-right">User</div>
        </div>
    </div>
{{-- @endforeach --}}
</Thread>
</center>
{{-- @stop --}}