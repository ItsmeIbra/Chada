@extends('layout')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h2>Books</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('books/create')}} " class="btn btn-warning btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        @if (session('success'))
                       <div class="alert alert-success">
                         {{ session('success') }}
                       </div>
                       @endif
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
    
                                        <th>Name</th>
                                        <th>Genre</th>
                                        <th>Cover</th>
                                        <th>Actions</th>
                                     
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                    
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->genre}}</td>
                                        <td><img src="{{ asset('imgs/' . $item->img) }}" style="width:60px; height:60px;" alt='img'></td>
                                       
 
                                        <td>
                                            <a href="{{ url('/books/' . $item->id) }}" title="View Books"><button class="btn btn-secondary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/books/' . $item->id . '/edit') }}" title="Edit book"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/books' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <a href="{{ url('/books/' . $item->id) }}" title="Delete book"> <button type="submit" class="btn btn-dark btn-sm" title="Delete Books" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                            <div classe="pagination-container d-flex justify-content-center">
                            {{$books-> links('pagination::bootstrap-5')}} </div>

                        </div>
 
                    </div>
                </div>
@endsection