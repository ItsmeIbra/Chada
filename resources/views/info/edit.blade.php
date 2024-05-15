@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Info Page</div>
  <div class="card-body">
      
      <form action="{{ url('/info/' .$info->id) }}" method="post" enctype="multipart/form-data">
       @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$info->id}}" id="id" />
        <label>Idnumber</label></br>
        <input type="text" name="Idnumber" id="Idnumber" value="{{$info->Idnumber}}" class="form-control"></br>
        <label>...</label></br>
        <input type="text" name="date_one" id="date_one" value="{{$info->date_one}}" class="form-control"></br>
        <label>....</label></br>
        <input type="text" name="date_tow" id="date_tow" value="{{$info->date_tow}}" class="form-control"></br>
        <label>Qunatity</label></br>
        <input type="text" name="count" id="count" value="{{$info->count}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop