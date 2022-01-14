@extends('layouts.nav')

@section('title', 'Home Page')

@section('isi')

    <div class="container">

        <div class="row">
            <h3 class="p-2 text-primary text-start">Master User</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $value)
                        <tr>
                            <th>{{$value->name}}</th>
                            <th>{{$value->email}}</th>
                            <th>
                                <form action="/removeUser/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <footer class="bg-primary fixed-bottom">
            <h5 class="text-center py-2" style="color: white">Q&A Forum &copy; Copyright 2021</h5>
        </footer>

    </div>
@stop