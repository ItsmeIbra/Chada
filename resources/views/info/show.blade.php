@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Info information</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">IDunmber : {{ $info->Idnumber }}</h5>
        <p class="card-text">... : {{ $info->date_one }}</p>
        <p class="card-text">... : {{ $info->date_tow }}</p>
        <p class="card-text">Qunatity : {{ $info->count }}</p>
       
  </div>
       
    </hr>
  
  </div>
</div>
@endsection