@extends('layout')
@section('content')


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
        </ul>
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
          @csrf
          <button class="btn btn-secondary" type="submit">Logout</button>
      </form>
      </div>
    </div>
</nav>
{{-- {{ Auth::user()->name }} --}}
<div class="container">
   <h1> Welcome to your space </h1>
</div>
@endsection