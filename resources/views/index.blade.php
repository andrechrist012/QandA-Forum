@extends('layouts.nav')

@section('title', 'Home Page')

@section('isi')


<center>
    <div style="padding-top:10px">
        <div class="container row">
            <input id="myInput" class="form-control col mr-5"  type="search" placeholder="Search" aria-label="Search">
                @if($role == 'M')
                    <div>
                    <a href="" class="h4 border border-dark rounded mt-1 bg-primary"  
                    style="color: white; text-decoration: none; padding: 10px;margin-top: -20px">Create Thread</a>
                    </div>
                @endif
        </div>
        <Thread id="Thread" class="container" style="margin-left: -1%">
            @foreach($thread as $Threads)
                <a href="/viewThread/{{$Threads->id}}" style="text-decoration: none">
                <div id="isiThread">
                    <div class="container border border-dark rounded mt-3">    
                        <div class="text-left"><strong>{{ $Threads->title }}</strong> {{ $Threads->category }}</div>
                            <div class="text-justify">{{ $Threads->description }}</div>
                            <div class="text-right">{{ $Threads->dateIn }}</div>
                            <div class="text-right">{{ $Threads->users->name }}</div>
                        </div>
                    </div>
                </a>
            @endforeach
        </Thread>         
    </div>
</center>
@stop