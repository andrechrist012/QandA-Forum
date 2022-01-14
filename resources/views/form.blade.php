@extends('layouts.nav')

@section('title', 'Home Page')

@section('isi')
    <form action="/create" method="POST">
        @csrf
        <div style="width: 80%; margin:auto; ">
            <h3 style="color: #3CA8F6">Add/Edit Thread</h3><br>
            <div style="background:#DDDDDD; padding: 1em; border-radius:10px">
                <div class="mb-3">
                    <input type="type" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="title">
                </div>
                <div class="mb-3">
                    <input type="type" class="form-control" id="exampleFormControlInput2" placeholder="Category" name="category">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
            </div>
        </div>
    </form>
@stop