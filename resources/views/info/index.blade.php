@extends('layout')
@section('content')
   
<div class="card">
   <div class="card-header">
     <h2>...</h2>
      </div>
     <div class="card-body">
        <a href="{{url('info.create')}} " class="btn btn-warning btn-sm" title="Add New info">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New </a>
    <br/>
    @if (session('success'))
          <div class="alert alert-success">
          {{ session('success') }}
    @endif
       </div>
        <br/>
          <div class="table-responsive">
           <table class="table">
            <thead>
                 <tr>
                 <th>ID</th>
                <th>idnumber</th>
                <th>...</th>
                 <th>...</th>
                 <th>Qunatity</th>
                 <th>Actions</th>
              </tr>
             </thead>
                <tbody>
                @foreach($info as $item)
                    <tr>
                     <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->Idnumber }}</td>
                    <td>{{ $item->date_one}}</td>
                    <td>{{ $item->date_tow}}</td>
                     <td>{{ $item->count }}</td>
                    <td>
            <a href="{{ url('/info/' . $item->id) }}" title="View Info"><button class="btn btn-secondary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="{{ url('/info/' . $item->id . '/edit') }}" title="Edit info"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
    <form method="POST" action="{{ url('/info' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
        {{ method_field('DELETE') }}
           @csrf
         <a href="{{ url('/info/' . $item->id) }}" title="Delete Info"> <button type="submit" class="btn btn-dark btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
          </form>
         </td>
            </tr>
        @endforeach
         </tbody>
           </table>
              <div class="pagination-container d-flex justify-content-center">
             {{ $info->links('pagination::bootstrap-5') }}
         </div>
         </div>
 
     </div>
</div>
@endsection