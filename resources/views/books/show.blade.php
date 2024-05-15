@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">books information</div>
  <div class="card-body">
   
 
        <div class="card-body">
          <img src="{{ asset('imgs/' . $books->img) }}" style="width:80px; height:80px;" alt='img'>
        <h5 class="card-title">Name : {{ $books->name }}</h5>
        <p class="card-text">Genre : {{ $books->genre }}</p>
      
  </div>
      
    </hr>
  
  </div>
</div>
@endsection