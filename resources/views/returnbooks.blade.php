@extends('app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        </li>
        <li class="nav-item">
        <h1 class="page-header text-center">Books Returned</h1>
        </li>
      </ul>
      <form class="d-flex" type = "get" action ="{{url('/searchreturn')}}">
        <input class="form-control me-2" type="search" name="searchreturn" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <h2 >List of Books
        </h2>
        
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-md-offset-1">
    <table class="table table-bordered table-responsive table-striped table-light">
            <thead>
                <th>Full Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Book Name</th>
                <th>ISBN</th>
                <th>Date Borrowed</th>
                <th>Date Return</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($returnbooks as $return)
                    <tr>
                        <td>{{$return->Fullname}}</td>
                        <td>{{$return->Address}}</td>
                        <td>{{$return->Contactnumber}}</td>
                        <td>{{$return->Bookname}}</td>
                        <td>{{$return->ISBN}}</td>
                       <td>{{$return->DateBorrowed}}</td>
                       <td>{{$return->DateReturn}}</td>
                       
             
                        <td>
                            <a href="#delete{{$return->id}}" data-bs-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                            @include('returnedmodal')                
                           
                           
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$returnbooks->onEachSide(1)->links()}}
    </div>
</div>
@endsection