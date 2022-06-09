@extends('layouts.master')

@section('title')
    view Movie
@endsection

@section('content')
<div class="container offset-4">
<iframe width="600" height="400" src="{{$movie->trailer}}"></iframe></div>
@endsection