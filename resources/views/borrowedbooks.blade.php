@extends('app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        </li>
        <li class="nav-item">
        <h1 class="page-header text-center">Books Borrowed</h1>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <h2 >List of Borrower
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
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($borroweds as $borrowed)
                    <tr>
                        <td>{{$borrowed->Fullname}}</td>
                        <td>{{$borrowed->Address}}</td>
                        <td>{{$borrowed->Contactnumber}}</td>
                        <td>{{$borrowed->Bookname}}</td>
                        <td>{{$borrowed->ISBN}}</td>
                       <td>{{$borrowed->DateBorrowed}}</td>
                       
             
                        <td> 
                        <a href="#return{{$borrowed->id}}" data-bs-toggle="modal" class="btn btn-success"><i class='fa fa-books'></i> Return</a>
                         
                            <a href="#delete{{$borrowed->id}}" data-bs-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                            @include('returnmodal')
                           
                           
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$borroweds->onEachSide(1)->links()}}
    </div>
</div>
@endsection