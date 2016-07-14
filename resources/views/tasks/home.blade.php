@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>
            My Tasks
        </h1>
        <div>
            @include('tasks.form')
        </div>
  
      @include('tasks.test')
      @include('tasks.alert')
    </div>
</div>

@endsection
