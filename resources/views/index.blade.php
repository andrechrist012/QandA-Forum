@extends('layouts.nav')

@section('title', 'Home Page')

@section('isi')


<center>
    <div style="padding-top:10px">
        <div class="container row">
            <input id="myInput" class="form-control col mr-5"  type="search" placeholder="Search" aria-label="Search">
                @if($role == 'M')
                    <div>
                    <a href="/createThread" class="h4 border border-dark rounded mt-1 bg-primary"  
                    style="color: white; text-decoration: none; padding: 10px;margin-top: -20px">Create Thread</a>
                    </div>
                @endif
        </div>
        <Thread id="Thread" class="container" style="margin-left: -1%">
            @foreach($thread as $Threads)
                <a href="/viewThread/{{$Threads->id}}" style="text-decoration: none">
                <div id="isiThread">
                    <div class="container rounded mt-3" style="background: #DDDDDD; color: black; padding: 10px; position: relative;">    
                        @if ($Threads->userId == Auth::id())
                            <form action="/removeThread/{{$Threads->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="position: absolute; right: 10px">Delete</button>
                            </form>
                        @endif
                        <div class="text-left"><strong>{{ $Threads->title }}</strong> <span style="margin-left: 10px">{{ $Threads->category }}</span></div>
                            <div class="text-justify longText">{{ $Threads->description }} </div>
                            <div class="text-right">{{ date('F d, Y', strtotime($Threads->dateIn)) }}</div>
                            <div class="text-right"><strong>{{ $Threads->users->name }}</strong></div>
                        </div>
                    </div>
                </a>
            @endforeach
        </Thread>         
    </div>
</center>
@stop