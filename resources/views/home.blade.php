@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>
            Project Flyer
        </h1>
        <p>
            This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.
        </p>
  
        <a class="btn btn-primary" href="/flyers/create">
            Create a Flyer
        </a>
    </div>
</div>
@include('flyers.test');
@endsection
