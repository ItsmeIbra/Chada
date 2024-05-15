@extends('layout')
@section('content')
   <div class="card">
    <div class="card-header">
     <h2>Etudiant</h2>
     </div>
    <div class="card-body">
    <a href="{{url('student.create')}} " class="btn btn-warning btn-sm" title="Add New Student">
      <i class="fa fa-plus" aria-hidden="true"></i> Add New
      </a>
     <br/>
    <br/>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
    <table class="table">
     <thead>
      <tr>
      <th>ID</th>
        <th>image</th>
       <th>Name</th>
       <th>Idnumber</th>
       <th>email</th>
       <th>Mobile</th>
        <th>Actions</th>                      
       </tr>
         </thead>
        <tbody>
        @foreach($student as $item)
          <tr>
             <td>{{ $loop->iteration }}</td>
             <td><img src="{{ asset('images' . $item->img) }}" style="width:60px; height:60px;" alt="img"></td>

            <td>{{ $item->name }}</td>
            <td>{{ $item->Idnumber}}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->mobile }}</td>
 
         <td>
         <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-secondary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
          <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
          <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
           {{ method_field('DELETE') }}
              @csrf
              <a href="{{ url('/student/' . $item->id) }}" title="Delete Student"> <button type="submit" class="btn btn-dark btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                </form>
                    </td>
                       </tr>
                          @endforeach
                            </tbody>
                            </table>
                            <div class="pagination-container d-flex justify-content-center">
                                {{ $student->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
 
                    </div>
                </div>
@endsection