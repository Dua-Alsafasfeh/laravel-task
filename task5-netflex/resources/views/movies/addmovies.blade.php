@extends('layout.master')
@section('title')
Add movie
@endsection

@section('content')
<div class="container row justify-content-center mt-5">
    <div class="col-4 offset-5">Add Movie Data</div>
    <div class="col-4 offset-3">
        <form action="addmovies" method="post" class="form-group">
            @csrf
            <label for="name">Movie Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <label for="genre">Movie Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
            <label for="description">Movie Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
            <label for="trailer">Movie trailer</label>
            <input type="text" class="form-control" id="trailer" name="trailer" required>
            <button type="submit" class="btn btn-danger mt-3" style="border:1px solid red ; color:white">Add</button>
        </form>
    </div>
</div>
@endsection