@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Student Informatin</div>
  <div class="card-body">
   
 
        <div class="card-body">
          <img src="{{ asset('images/' . $student->img) }}" style="width:80px; height:80px;" alt='img'>
        <h5 class="card-title">Name : {{ $student->name }}</h5>
        <p class="card-text">Idnumber : {{ $student->Idnumber }}</p>
        <p class="card-text">Email : {{ $student->email }}</p>
        <p class="card-text">Mobile : {{ $student->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection