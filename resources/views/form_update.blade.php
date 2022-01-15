@extends('layouts.nav')

@section('title', 'Update Thread')

@section('isi')
    <form action="/update/{{$thread->id}}" method="POST">
        @csrf
        @method('PUT')
        <div style="width: 80%; margin:auto; ">
            <h3 style="color: #3CA8F6">Edit Thread</h3><br>
            <div style="background:#DDDDDD; padding: 1em; border-radius:10px">
                <div class="mb-3">
                    <input type="type" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="title" value="{{$thread->title}}">
                    @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="type" class="form-control" id="exampleFormControlInput2" placeholder="Category" name="category" value="{{$thread->category}}">
                    @error('category')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="description">{{$thread->description}}</textarea>
                    @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
            </div>
        </div>
    </form>
@stop