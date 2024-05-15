@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Student Page</div>
  <div class="card-body">
      
    <form action="{{ url('/student/' .$student->id) }}" method="post" enctype="multipart/form-data">

       @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"></br>
        <label>Idnumber</label></br>
        <input type="text" name="Idnumber" id="Idnumber" value="{{$student->Idnumber}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$student->email}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$student->mobile}}" class="form-control"></br>
        <div class="mb-3">
          <label> upload the photo</label>
          <input type="file" name="img" accept="image/*">
          </div>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop