@extends('layouts.nav')

@section('title', ($thread->title))

@section('isi')

    <div>
        <div class="card text-white bg-light mb-3" style="width: 80%; margin:auto;">
            <div class="card-header" style="color: black; display:flex; position: relative;" >
                <img src="{{asset('asset/user.png')}}" style="width: 4%">
                <div style="display: flex; flex-direction:column; margin-left: .5em">
                    <a>{{$thread->users->name}}</a>
                    <a style="font-size: 12px">{{ date('F d, Y', strtotime($thread->dateIn)) }}</a>
                </div>
                @if ($thread->userId == Auth::id())
                    <form action="/removeThread/{{$thread->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="position: absolute; right: 10px; top: 12px;">Delete</button>
                    </form>
                    <form action="/updateThread/{{$thread->id}}" method="GET">
                        <button type="submit" class="btn btn-success" style="position: absolute; right: 100px; top: 12px;">Update</button>
                    </form>
                @endif
            </div>
            <div class="card-body" style="color: black">
              <h5 class="card-title">{{$thread->title}}</h5>
              <p class="card-text">{{$thread->description}}</p>
            </div>
          </div>
    </div>
    <br>
    @if ($role == "M")
        <div style="width: 80%; margin : auto;">
            <form action="/replyThread/{{$thread->id}}" method="POST">
                @csrf
                <input class="form-control me-2" type="text" name="message">
                <button type="submit" class="btn btn-primary" style="float: right; margin-top: .5em">Reply</button>
            </form>
        </div>
        <br><br><br>
    @endif
    <div>
        @foreach ($reply as $value)
            <div class="card text-white bg-white mb-3" style="width: 80%; margin:auto; border-radius: 10px">
                <div style="position: relative">
                    @if ($value->userId == Auth::id())
                        <form action="/deleteReply/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="position: absolute; top: 10px; left: 10px">Delete</button>
                        </form>
                    @endif
                    <div style="color: black; display:flex; flex-direction:row-reverse; padding: 1em 1em 0 0">
                        <img src="{{asset('asset/user.png')}}" style="width: 4%;">
                        <div style="display: flex; flex-direction:column; margin-right: .5em; text-align: right">
                            <a>{{$value->user->name}}</a>
                            <a style="font-size: 12px">{{ date('F d, Y', strtotime($value->dateIn)) }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="color: black; text-align: right;">
                <p class="card-text">{{$value->message}}</p>
                </div>
            </div>
        @endforeach
        <br>
    </div>

@stop
