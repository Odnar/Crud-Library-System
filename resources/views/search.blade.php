@extends('app')
 
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        </li>
        <li class="nav-item">
        <h1 class="page-header text-center">Books</h1>
        </li>
      </ul>
      <form class="d-flex" type = "get" action ="{{url('/searchbooks')}}">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <h2 >List of Books
        <button type="button" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right "><i class="fa fa-plus"></i> Add Books</button>
        </h2>
        
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <table class="table table-bordered table-responsive table-striped">
            <thead>
                <th>ISBN</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Quantity</th>
                <th>Action</th>
            </thead>
            <tbody>
              
                @foreach($booksearch as $booksshow)
                    <tr>
                        <td>{{$booksshow->ISBN}}</td>
                        <td>{{$booksshow->Bookname}}</td>
                        <td>{{$booksshow->Author}}</td>
                        <td>{{$booksshow->Quantity}}</td>
                        <td> 
                            <a href="#edit{{$booksshow->id}}" data-bs-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a> 
                            <a href="#delete{{$booksshow->id}}" data-bs-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                            @include('action')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection