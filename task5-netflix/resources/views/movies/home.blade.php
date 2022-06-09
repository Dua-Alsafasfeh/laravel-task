@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="container">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif  
    <div class="row justify-content-center">
        <div class="col-2 mt-5">
            <button class="btn btn-outline-danger"><a href="{{url('add')}}">Add New Movie</a></button>
        </div>
    </div>
    @foreach ($movies as $movie)
       @if ($movie->destroy == 1)
            @continue
       @else 
            <div class="card" style="width: 25rem;">
            <img class="card-img-top" src="{{$movie->picture}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><a href="{{url("/store/id/$movie->id")}}">{{$movie->name}}</a></h5>
                <p class="card-text">{{$movie->description}}</p>
                <a href="{{url("edit/id/$movie->id")}}" class="btn btn-outline-primary">Edit</a>
                <a href="{{url("delete/id/$movie->id")}}" class="btn btn-outline-warning">Delete</a>
                <a href="{{url("/store/id/$movie->id")}}" class="btn btn-outline-danger">View</a>
             </div>
        </div>
        <br>
       @endif   
    @endforeach
    </div>
@endsection