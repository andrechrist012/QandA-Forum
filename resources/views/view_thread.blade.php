@extends('nav')

@section('title', 'View Thread')

@section('isi')

    <div>
        <div class="card text-white bg-light mb-3" style="width: 80%; margin:auto;">
            <div class="card-header" style="color: black; display:flex;">
                <img src="{{asset('asset/user.png')}}" style="width: 4%">
                <div style="display: flex; flex-direction:column; margin-left: .5em">
                    <a>Header</a>
                    <a style="font-size: 12px">12-06-2001</a>
                </div>
            </div>
            <div class="card-body" style="color: black">
              <h5 class="card-title">Secondary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
    <br>
    <div style="width: 80%; margin : auto;">
        <form action="/replyThread/" method="POST">
            @csrf
            <input class="form-control me-2" type="text" name="reply">
            <button type="button" class="btn btn-primary" style="float: right; margin-top: .5em">Reply</button>
        </form>
    </div>
    <br><br><br>

    <div>
        <div class="card text-white bg-white mb-3" style="width: 80%; margin:auto; border-radius: 10px">
            <div style="color: black; display:flex; flex-direction:row-reverse; padding: 1em 1em 0 0">
                <img src="{{asset('asset/user.png')}}" style="width: 4%;">
                <div style="display: flex; flex-direction:column; margin-right: .5em; text-align: right">
                    <a>Header</a>
                    <a style="font-size: 12px">12-06-2001</a>
                </div>
            </div>
            <div class="card-body" style="color: black; text-align: right;">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>

@stop