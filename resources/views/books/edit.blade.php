@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit books Page</div>
  <div class="card-body">
      
    <form action="{{ url('/books/' .$books->id) }}" method="post" enctype="multipart/form-data">

       @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$books->name}}" class="form-control"></br>
        <label>genre</label></br>
        <input type="text" name="genre" id="genre" value="{{$books->genre}}" class="form-control"></br>

        <div class="mb-3">
          <label> upload the photo</label>
          <input type="file" name="img" accept="image/*">
          </div>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop