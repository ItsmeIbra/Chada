@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Info Page</div>
  <div class="card-body">
    
     @if(Session::has('success'))
    <div class="alert alert-success" role="alert"
    {{Session::get('success')}} </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
    <h3>Errors :</h3>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
   
      <form action=" {{route('info.store')}}" method="post">
        @csrf
        <label>Idnumber</label></br>
        <input type="text" name="Idnumber" id="Idnumber" class="form-control"></br>
 <br>
        <label>....</label></br>
        <input type="date" name="date_one" id="date_one" class="form-control"></br>
       
<label>....</label></br>
<input type="date" name="date_tow" id="date_tow" class="form-control"></br>
        <label>Qunatity</label></br>
        <input type="text" name="count" id="count" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop