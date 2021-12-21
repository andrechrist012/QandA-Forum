@extends('nav')

@section('title', 'Home Page')

@section('isi')

<center>
    <div class="row" style="margin-left:10%">
        <Thread id="Thread">
@foreach($threads as $Threads)
            <div id="isiThread">
                <div class="container border border-dark rounded mt-3">
                
                    <div class="text-left"><strong>{{ $Threads->title }}</strong> {{ $Threads->category }}</div>
                    <div class="text-justify">{{ $Threads->description }}</div>
                    <div class="text-right">{{ $Threads->datein }}</div>
                    <div class="text-right">{{ $Threads->name }}</div>

                </div>
            </div>
@endforeach
        </Thread> 
            @if($id == 1)
                <div class="ml-3 mt-4">
                <a href="" class="h4 border border-dark rounded mt-1 bg-primary"  
                style="color: white; text-decoration: none; padding: 10px;margin-top: -20px">Create Thread</a>
                </div>
            @endif
        </div>
</center>
@stop