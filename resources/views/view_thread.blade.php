@extends('nav')

@section('title', 'View Thread')

@section('isi')

    <div>
        <div class="card text-white bg-light mb-3" style="width: 80%; margin:auto;">
            <div class="card-header" style="color: black; display:flex;">
                <img src="{{asset('asset/user.png')}}" style="width: 4%">
                <div style="display: flex; flex-direction:column; margin-left: .5em">
                    <a>{{$thread->user->name}}</a>
                    <a style="font-size: 12px">{{$thread->dateIn}}</a>
                </div>
            </div>
            <div class="card-body" style="color: black">
              <h5 class="card-title">{{$thread->title}}</h5>
              <p class="card-text">{{$thread->description}}</p>
            </div>
          </div>
    </div>
    <br>
    <div style="width: 80%; margin : auto;">
        <form action="/replyThread/{{$thread->id}}" method="POST">
            @csrf
            <input class="form-control me-2" type="text" name="reply">
            <button type="submit" class="btn btn-primary" style="float: right; margin-top: .5em">Reply</button>
        </form>
    </div>
    <br><br><br>

    <div>
        @foreach ($reply as $value)
            <div class="card text-white bg-white mb-3" style="width: 80%; margin:auto; border-radius: 10px">
                <div style="color: black; display:flex; flex-direction:row-reverse; padding: 1em 1em 0 0">
                    <img src="{{asset('asset/user.png')}}" style="width: 4%;">
                    <div style="display: flex; flex-direction:column; margin-right: .5em; text-align: right">
                        <a>{{$value->user->name}}</a>
                        <a style="font-size: 12px">{{$value->dateIn}}</a>
                    </div>
                </div>
                <div class="card-body" style="color: black; text-align: right;">
                <p class="card-text">{{$value->message}}</p>
                </div>
            </div>
        @endforeach
    </div>

@stop