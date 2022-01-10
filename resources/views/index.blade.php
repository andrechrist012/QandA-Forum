@extends('nav')

@section('title', 'Home Page')

@section('isi')


<center>
    <div class="row" style="margin-left:10%">
        <div class="container row">
            <input id="myInput" class="form-control col mr-5"  type="search" placeholder="Search" aria-label="Search">
                @if($id == 1)
                    <div>
                    <a href="" class="h4 border border-dark rounded mt-1 bg-primary"  
                    style="color: white; text-decoration: none; padding: 10px;margin-top: -20px">Create Thread</a>
                    </div>
                @endif
        </div>
        <Thread id="Thread" class="container" style="margin-left: -1%">
{{-- @foreach($threads as $Threads)
            <div id="isiThread">
                <div class="container border border-dark rounded mt-3">
                
                    <div class="text-left"><strong>{{ $Threads->title }}</strong> {{ $Threads->category }}</div>
                    <div class="text-justify">{{ $Threads->description }}</div>
                    <div class="text-right">{{ $Threads->datein }}</div>
                    <div class="text-right">{{ $Threads->name }}</div> --}}

                {{-- </div>
            </div> --}}
{{-- @endforeach --}}

        <div id="isiThread">
            <div class="container border border-dark rounded mt-3">
                <div class="text-left"><strong>This is Lorem</strong> Category1</div>
                <div class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus
                    laboriosam eius voluptas inventore possimus libero repellendus natus, 
                    enim, incidunt minima omnis distinctio nulla ab voluptatibus similique rem sunt quaerat dolore.</div>
                <div class="text-right">3 November 2021</div>
                <div class="text-right">Person 2</div>
            </div>
        </div>
        <div id="isiThread">
            <div class="container border border-dark rounded mt-3">
            
                <div class="text-left"><strong>Anak Gembala Duar</strong> Orang Gila</div>
                <div class="text-justify">Aku Adalah Anak Gembala yang suka BOM !!!</div>
                <div class="text-right">3 November 2021</div>
                <div class="text-right">Gembala</div>

            </div>
        </div>

        </Thread> 

            
        </div>
</center>
@stop